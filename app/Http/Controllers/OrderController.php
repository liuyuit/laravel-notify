<?php

namespace App\Http\Controllers;

use App\Events\OrderShipped;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function ship()
    {
        $order = Order::findOrFail(request('id'));
        event(new OrderShipped($order));
    }
}
