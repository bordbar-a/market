<?php

namespace App\Providers;

use App\Helpers\Setting\SettingHelper;
use App\Models\Setting;
use App\Services\Basket\Providers\SessionBasketProvider;
use Illuminate\Support\Facades\Schema;
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
        $this->app->singleton('basket', function ($app){
            return new SessionBasketProvider();
        });

        $this->app->singleton('setting', function ($app){
            return new SettingHelper();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
