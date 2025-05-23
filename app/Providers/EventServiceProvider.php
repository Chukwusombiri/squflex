<?php

namespace App\Providers;

use App\Listeners\LoginOnlineListener;
use App\Listeners\LogoutOfflineListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Auth\Events\Logout;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        \App\Events\UserDeposited::class => [
            \App\Listeners\SendDepositInstructions::class
        ],

        \App\Events\UserWithdrew::class => [
            \App\Listeners\SendWithdrawalNotification::class
        ],

        Authenticated::class => [
            LoginOnlineListener::class,
        ],
        Logout::class => [
            LogoutOfflineListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
