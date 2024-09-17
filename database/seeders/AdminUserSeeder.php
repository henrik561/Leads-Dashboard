<?php

namespace Database\Seeders;

use App\Enums\UserRoles;
use App\Models\Lead;
use App\Models\Site;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(1)
            ->has(
                Site::factory()->count(3)->has(
                    Lead::factory()->count(5),
                    'leads'
                ),
                'sites'
            )->create([
                'email' => 'henrik@designated.nl',
                'password' => Hash::make('admin'),
            ]);

        $user = User::whereEmail('henrik@designated.nl')->first();

        $user->assignRole(UserRoles::ADMIN->value);
    }
}
