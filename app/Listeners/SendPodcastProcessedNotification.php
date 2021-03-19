<?php

use App\Events\PodcastProcessed;

class SendPodcastProcessedNotification
{
    /**
    * 处理给定的事件。
    *
    * @param  \App\Events\PodcastProcessed
    * @return void
    */
    public function handle(PodcastProcessed $event)
    {
        //
    }
}
