<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function index(Request $request)
    {
        $user = \App\Models\AdminUser::find(1);

      /*  foreach ($user->roles as $role) {
            var_dump($role);
        }*/

        $roles = $user->roles()->orderBy('name')->get();


    }
}
