<?php

namespace App\Listeners;

use App\Events\OrderShipped;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendShipmentNotification
{

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrderShipped  $event
     * @return bool
     */
    public function handle(OrderShipped $event)
    {
        Log::notice(time());

        $event->order->status += 1;
        $event->order->save();

        Log::notice($event->order->id);
        echo 'send shipment notification';
        return false; //  返回 false 来阻止事件被其它的监听器获取。
    }

    /**
     * 处理任务的失败
     *
     * @param  \App\Events\OrderShipped  $event
     * @param  \Throwable  $exception
     * @return void
     */
    public function failed(OrderShipped $event, $exception)
    {
        Log::notice($exception->getMessage());
    }

/*    public function shouldQueue(OrderShipped $event)
    {
        return $event->order->money >= 50;
        return $event->order->money >= 50;
    }*/
}
