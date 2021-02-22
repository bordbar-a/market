<?php

namespace App\Providers;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {


        Gate::before(function ($user, $ability) {
            if ($user->hasPermission(Permission::ALL)) {
                return true;
            }
        });


        Permission::all()->map(function ($permission) {
            Gate::define($permission->name, function (User $user) use ($permission) {
                return $user->hasPermission($permission->name);
            });
        });
    }
}
