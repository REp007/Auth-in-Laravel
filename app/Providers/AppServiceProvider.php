<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use App\Events\PodcastProcessed;
// use App\Listeners\SendPodcastNotification;
use Illuminate\Support\Facades\Event;

use App\Events\RegisterEvent;
use App\Listeners\EmailListener;

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
        // Event::listen(
        //     PodcastProcessed::class,
        //     SendPodcastNotification::class,
        // );

        Event::listen(
            RegisterEvent::class,
            EmailListener::class
        );
    }
}
