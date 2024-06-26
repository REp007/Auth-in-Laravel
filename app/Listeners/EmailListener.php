<?php

namespace App\Listeners;

use App\Events\RegisterEvent;
use App\Notifications\test;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class EmailListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(RegisterEvent $event): void
    {
        $event->user->notify(new test());
    }
}
