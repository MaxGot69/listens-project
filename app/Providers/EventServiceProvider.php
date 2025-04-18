<?php

namespace App\Providers;


use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\ClientCreated;
use App\Listeners\SendAdminNotification;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        ClientCreated::class => [
            SendAdminNotification::class,
        ],
    ];


    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
