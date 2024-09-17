<?php

use App\Enums\UserRoles;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserTrashedController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Middleware\RoleMiddleware;

Route::prefix('admin')->middleware(['auth', 'verified', RoleMiddleware::using(UserRoles::ADMIN->value)])->group(function () {
    Route::redirect('/', '/admin/users')->name('admin.dashboard');

    Route::resource('/users/trashed', UserTrashedController::class)->only(['index', 'update', 'destroy'])->names([
        'index' => 'admin.users.trashed.index',
        'update' => 'admin.users.trashed.update',
        'destroy' => 'admin.users.trashed.destroy',
    ]);

    Route::resource('users', UserController::class)->names([
        'index' => 'admin.users.index',
        'store' => 'admin.users.store',
        'create' => 'admin.users.create',
        'show' => 'admin.users.show',
        'update' => 'admin.users.update',
        'destroy' => 'admin.users.destroy',
    ]);
});
