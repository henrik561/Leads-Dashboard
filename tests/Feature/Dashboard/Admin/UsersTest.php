<?php

namespace Tests\Feature\Dashboard\Admin;

use App\Enums\UserRoles;
use App\Models\Site;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class UsersTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_user_cannot_view_admin_dashboard(): void
    {
        // create user with role user and assert 403
        $user = User::factory()->create();

        $userRole = Role::firstOrCreate(['name' => UserRoles::USER->value]);

        $user->assignRole($userRole);

        $response = $this
            ->actingAs($user)
            ->get('/admin');

        $response->assertForbidden();
    }

    public function test_admin_can_view_admin_dashboard(): void
    {
        // create user with role admin and assert 200
        $user = User::factory()->create();

        $adminRole = Role::firstOrCreate(['name' => UserRoles::ADMIN->value]);

        $user->assignRole($adminRole);

        $response = $this
            ->actingAs($user)
            ->get('/admin');

        $response->assertRedirect('/admin/users');
    }

    public function test_admin_can_view_dashboard_users_page()
    {
        $user = User::factory()->create();
        $adminRole = Role::firstOrCreate(['name' => UserRoles::ADMIN->value]);
        $user->assignRole($adminRole);

        $response = $this
            ->actingAs($user)
            ->get('/admin/users');

        $viewableUsers = User::where('id', '!=', $user->id)->get();

        $response->assertInertia(function ($page) use ($viewableUsers) {
            $usersResponse = $page->toArray()['props']['users'];

            $userIds = collect($usersResponse)->pluck('id')->all();

            foreach ($viewableUsers as $users) {
                $this->assertContains($users->id, $userIds);
            }
        });
    }

    public function test_admin_dashboard_users_trashed_page()
    {
        $user = User::factory()->create();
        $adminRole = Role::firstOrCreate(['name' => UserRoles::ADMIN->value]);
        $user->assignRole($adminRole);

        $viewableUsers = User::factory(3)->create();
        $userRole = Role::firstOrCreate(['name' => UserRoles::USER->value]);
        $viewableUsers->each(function ($user) use ($userRole) {
            $user->assignRole($userRole);
            $user->delete();
        });

        $response = $this
            ->actingAs($user)
            ->get('/admin/users/trashed');

        $response->assertInertia(function ($page) use ($viewableUsers) {
            $trashedUsersResponse = $page->toArray()['props']['users'];

            $trashedUserIds = collect($trashedUsersResponse)->pluck('id')->all();

            foreach ($viewableUsers as $trashedUser) {
                $this->assertContains($trashedUser->id, $trashedUserIds);
            }
        });
    }

    public function test_admin_can_trash_user(): void
    {
        $user = User::factory()->create();
        $adminRole = Role::firstOrCreate(['name' => UserRoles::ADMIN->value]);
        $user->assignRole($adminRole);

        $userToTrash = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->delete('/admin/users/'.$userToTrash->id);

        $response->assertRedirect('/admin/users');

        $this->assertSoftDeleted('users', ['id' => $userToTrash->id]);
    }

    public function test_admin_can_force_delete_user(): void
    {
        $adminUser = User::factory()->create();
        $adminRole = Role::firstOrCreate(['name' => UserRoles::ADMIN->value]);
        $adminUser->assignRole($adminRole);

        $userToForceDelete = User::factory()->create();

        // soft delete the user so it can be force deleted
        $userToForceDelete->delete();

        $response = $this
            ->actingAs($adminUser)
            ->delete('/admin/users/trashed/'.$userToForceDelete->id);

        // check if the user is force deleted and then the page is redirected to /admin/users
        $response->assertRedirect('/admin/users/trashed');

        // check if the user is actually deleted from the database
        $this->assertDatabaseMissing('users', ['id' => $userToForceDelete->id]);
    }

    public function test_admin_can_view_user_page(): void
    {
        $user = User::factory()->create();
        $adminRole = Role::firstOrCreate(['name' => UserRoles::ADMIN->value]);
        $user->assignRole($adminRole);

        $userToView = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/admin/users/'.$userToView->id);

        $response->assertInertia(function ($page) use ($userToView) {
            $userResponse = $page->toArray()['props']['user'];

            $this->assertEquals($userToView->id, $userResponse['id']);
        });
    }

    public function test_admin_can_update_user_personal_info(): void
    {
        $user = User::factory()->create();
        $adminRole = Role::firstOrCreate(['name' => UserRoles::ADMIN->value]);
        $user->assignRole($adminRole);

        $userToUpdate = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->put('/admin/users/'.$userToUpdate->id, [
                'name' => 'Updated Name',
                'email' => fake()->email(),
            ]);

        $response->assertRedirect('/admin/users');
    }

    public function test_admin_can_update_user_roles(): void
    {
        $adminRole = Role::firstOrCreate(['name' => UserRoles::ADMIN->value]);
        $userRole = Role::firstOrCreate(['name' => UserRoles::USER->value]);

        $user = User::factory()->create();

        $user->assignRole($adminRole);

        $userToUpdate = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->put('/admin/users/'.$userToUpdate->id, [
                'roles' => [UserRoles::USER->value],
            ]);

        $response->assertRedirect('/admin/users');

        $this->assertTrue($userToUpdate->hasRole($userRole));
        $this->assertFalse($userToUpdate->hasRole($adminRole));
    }

    public function test_admin_can_update_user_sites(): void
    {
        $adminUser = User::factory()->create();
        $adminRole = Role::firstOrCreate(['name' => UserRoles::ADMIN->value]);
        $adminUser->assignRole($adminRole);

        $userToUpdate = User::factory()->create();

        $existingSite = Site::factory()->create();

        $userToUpdate->sites()->attach($existingSite);

        $sites = [
            ['domain' => 'example.com', 'name' => 'Example Site', 'api_key' => '123', 'api_secret' => '123'],
        ];

        $response = $this
            ->actingAs($adminUser)
            ->put('/admin/users/'.$userToUpdate->id, [
                'sites' => $sites,
            ]);

        $response->assertRedirect('/admin/users');

        $this->assertDatabaseHas('sites', ['domain' => 'example.com']);

        $site = Site::where('domain', 'example.com')->first();

        $this->assertDatabaseHas('site_user', ['user_id' => $userToUpdate->id, 'site_id' => $site->id]);
        $this->assertDatabaseMissing('site_user', ['user_id' => $userToUpdate->id, 'site_id' => $existingSite->id]);
        $this->assertDatabaseMissing('sites', ['id' => $existingSite->id]);
    }
}
