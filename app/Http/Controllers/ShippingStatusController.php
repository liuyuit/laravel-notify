<?php

namespace App\Http\Controllers;

use App\Events\ShippingStatusUpdated;
use App\Models\Order;
use Illuminate\Http\Request;

class ShippingStatusController extends Controller
{
    public function index()
    {
        $order = Order::findOrFail(request('id'));
        event(new ShippingStatusUpdated($order));
    }
}
