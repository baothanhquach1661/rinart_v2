<?php

namespace App\Listeners;

use App\Events\RTOderPlacedNotificationEvent;
use App\Models\OrderPlacedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class RTOrderPlacedNotificationListener
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
    public function handle(RTOderPlacedNotificationEvent $event): void
    {
        $notification = new OrderPlacedNotification();
        $notification->message = $event->message;
        $notification->order_id = $event->orderId;
        $notification->save();

        Log::info('RTOrderPlacedNotificationListener fired with event: ' . $event->message);
    }
}
