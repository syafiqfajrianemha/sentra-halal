<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (env('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }

        Gate::define('access-admin-user', function ($user) {
            return in_array($user->role, ['admin', 'user']);
        });

        Gate::define('access-admin', function ($user) {
            return in_array($user->role, ['admin']);
        });

        Gate::define('access-user', function ($user) {
            return in_array($user->role, ['user']);
        });
    }
}
