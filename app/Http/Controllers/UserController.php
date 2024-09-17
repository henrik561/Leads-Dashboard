<?php

namespace App\Http\Controllers;

use App\Actions\Users\UpdateUserAction;
use App\Actions\Users\UpdateUserRolesAction;
use App\Actions\Users\UpdateUserSitesAction;
use App\Http\Requests\Admin\ProfileUpdateRequest as AdminProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Inertia\Response;

class UserController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Admin/Users/Users', [
            'users' => User::with('roles', 'sites')->whereNot('id', Auth::user()->id)->get(),
            'trashedUsersCount' => User::onlyTrashed()->count(),
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('Admin/Users/User');
    }

    public function show(User $user): Response
    {
        $user->load('sites', 'roles');

        return Inertia::render('Admin/Users/User', [
            'user' => $user,
        ]);
    }

    public function update(
        AdminProfileUpdateRequest $request,
        User $user,
        UpdateUserAction $updateUserAction,
        UpdateUserSitesAction $updateUserSitesAction,
        UpdateUserRolesAction $updateUserRolesAction
    ): RedirectResponse {
        $validated = $request->validated();

        $updateUserAction->execute($validated, $user);

        $updateUserRolesAction->execute($user, $validated['roles'] ?? []);

        $updateUserSitesAction->execute($user, $validated['sites'] ?? []);

        return Redirect::route('admin.users.index');
    }

    public function store(
        AdminProfileUpdateRequest $request,
        User $user,
        UpdateUserAction $updateUserAction,
        UpdateUserSitesAction $updateUserSitesAction,
        UpdateUserRolesAction $updateUserRolesAction
    ): RedirectResponse {
        $validated = $request->validated();

        $user = $updateUserAction->execute($validated);

        $updateUserRolesAction->execute($user, $validated['roles']);

        $updateUserSitesAction->execute($user, $validated['sites']);

        return Redirect::route('admin.users.index');
    }

    public function destroy(User $user): RedirectResponse
    {
        if ($user->id == Auth::user()->id) {
            throw ValidationException::withMessages([
                'error' => __('profile.self_delete'),
            ]);
        }

        $user->delete();

        return Redirect::route('admin.users.index');
    }
}
