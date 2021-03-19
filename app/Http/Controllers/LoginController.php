<?php

namespace App\Http\Controllers;

use App\Events\Login;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        $user = User::find(request('id'));
        event(new Login($user));
    }
}
