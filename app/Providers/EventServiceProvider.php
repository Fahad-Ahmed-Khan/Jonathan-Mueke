<?php

namespace App\Providers;

use App\Listeners\UserAccountCreationEmailListener;
use App\Models\User;
use App\Observers\UserAccountDeletionObserver;
use App\Observers\UserObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
            UserAccountCreationEmailListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {

        //2. Register observer here
        User::observe(UserObserver::class);
        User::observe(UserAccountDeletionObserver::class);
    }
}
