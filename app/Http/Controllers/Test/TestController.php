<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\InvoicePaid;
use Illuminate\Support\Facades\Notification;

class TestController extends Controller
{
    public function index()
    {
/*        $user = User::find(1);
        $user->notify(new InvoicePaid());

        Notification::send($user, new InvoicePaid());*/

        return response('hello laravel');
    }
}
