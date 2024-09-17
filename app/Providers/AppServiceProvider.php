<?php

namespace App\Providers;

use App\Enums\UserRoles;
use App\Models\Lead;
use App\Observers\LeadObserver;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void {}

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Lead::observe(LeadObserver::class);

        Inertia::share('authUser', function () {
            return Auth::user() ? Auth::user()->load('roles') : null;
        });

        Inertia::share('roles', function () {
            return [
                'admin' => UserRoles::ADMIN->value,
                'user' => UserRoles::USER->value,
            ];
        });
    }
}
