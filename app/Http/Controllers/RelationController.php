<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function index(Request $request)
    {
//        $user = \App\Models\AdminUser::find(1);

      /*  foreach ($user->roles as $role) {
            var_dump($role);
        }*/

//        $roles = $user->roles()->orderBy('name')->get();


        $post = Post::find(1);
        $image = $post->image;

        $imageModel = Image::find(1);
        $imageable = $imageModel->imageable; // 获得父模型
    }
}
