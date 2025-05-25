<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
    DocumentoSubido::class => [
        EnviarNotificacionDocumento::class,
    ],
    ];
    
    public function boot()
    {
        //
    }

    public function shouldDiscoverEvents()
    {
        return false;
    }
}