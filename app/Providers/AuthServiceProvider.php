<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //custom gate
        //Define Admin User Role
        Gate::define('isAdmin', function ($user){

            return $user->role == 'admin';
        });
        
        //defining manager 
        Gate::define('isManager', function($user){
            return $user->role == 'manager';
        });

        //defining user
        Gate::define('isUser', function($user){
            return $user->role == 'user';
        });
    }
}
