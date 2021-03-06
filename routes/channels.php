<?php

use App\Models\Order;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('admin.{id}', function ($admin, $id) {
    Log::debug('broadcast.admin');
    return true;
    return (int) $admin->id === (int) $id;
});



Broadcast::channel('order.{orderId}', function ($user, $orderId) {
    Log::debug('broadcast.order');
    return $user->id === Order::findOrNew($orderId)->uid;
});

/*Broadcast::channel('order.{orderId}', function ($user, $orderId) {
    return $user->id == Order::findOrFail($orderId)->uid;
});*/
