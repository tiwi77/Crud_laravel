<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('IsAdmin', function($user) {
            return $user->role == 'Administrator';});

        Gate::define('IsOpreator', function($user) {
            return $user->role == 'operator';});

        Gate::define('IsUser', function($user) {
            return $user->role == 'user';});
    }
}
