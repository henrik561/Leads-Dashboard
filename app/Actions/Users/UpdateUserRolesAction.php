<?php

namespace App\Actions\Users;

use Spatie\Permission\Models\Role;

class UpdateUserRolesAction
{
    public function execute($user, $roles): void
    {
        if (! $user || ! $roles) {
            return;
        }

        $roleIds = Role::whereIn('name', $roles)->pluck('id')->toArray();

        $user->roles()->sync($roleIds);
    }
}
