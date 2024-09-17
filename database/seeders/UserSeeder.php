<?php

namespace Database\Seeders;

use App\Enums\UserRoles;
use App\Models\Lead;
use App\Models\Site;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)
            ->has(
                Site::factory()->count(3)->has(
                    Lead::factory()->count(5),
                    'leads'
                ),
                'sites'
            )->create()->each(function ($user) {
                $user->assignRole(UserRoles::USER->value);
            });
    }
}
