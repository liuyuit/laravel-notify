<?php

namespace App\Listeners;

use App\Events\Login;
use App\Events\Logout;

class UserEventSubscriber
{
    /**
     * 处理用户登录事件
     * @param $event Login
     */
    public function handleUserLogin($event) {
        $event->user->login_times += 1;
        $event->user->save();
    }

    /**
     * 处理用户注销事件
     * @param $event Logout
     */
    public function handleUserLogout($event) {
        $event->user->logout_times += 1;
        $event->user->save();
    }

    /**
     * 为事件订阅者注册监听器
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     * @return void
     */
    public function subscribe($events)
    {
        $events->listen(
            Login::class,
            [UserEventSubscriber::class, 'handleUserLogin']
        );

        $events->listen(
            Logout::class,
            [UserEventSubscriber::class, 'handleUserLogout']
        );
    }
}
