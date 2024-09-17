<?php

namespace App\Actions\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UpdateUserAction
{
    public function execute(array $validatedData, $user = null): User|bool
    {
        if (! isset($validatedData['name']) || ! isset($validatedData['email'])) {
            return false;
        }

        $user = $user ?? new User;

        $user->fill([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => isset($validatedData['password']) ? Hash::make($validatedData['password']) : $user->password,
        ]);

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return $user;
    }
}
