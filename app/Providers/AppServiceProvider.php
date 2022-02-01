<?php

namespace App\Providers;

use App\Models\Backend\RequestForGreeting;
use App\Models\User;
use App\Observers\RequestForShoutOut;
use App\Observers\UserObserver;
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
        //
       

    }
}
