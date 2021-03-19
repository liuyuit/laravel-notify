<?php

namespace App\Http\Controllers;

use App\Events\Logout;
use App\Models\User;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function index() {
        $user = User::find(request('id'));
        event(new Logout($user));
    }
}
