<?php

namespace Database\Seeders;

use App\Enums\UserRoles;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = array_column(UserRoles::cases(), 'value');

        collect($roles)->each(function (string $role) {
            Role::create(['name' => $role]);
        });
    }
}
