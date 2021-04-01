<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
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


       /* $post = Post::find(1);
        $image = $post->image;

        $imageModel = Image::find(1);
        $imageable = $imageModel->imageable; // 获得父模型*/

        /*$post = Post::find(1);
        $comments = $post->comments;
        $comment = $post->comment;

        $video = Video::find(1);
        $commentsOfVideo = $video->comments; // 一对多多态
        $commentOfVideo = $video->comment; // 一对一多态*/

        $post = Post::find(1);
        $tags = $post->tags;

        $alias = $post->getMorphClass(); // posts
        $class = Relation::getMorphedModel($alias); // App\Models\Post

    }

    public function with()
    {
//        $books = Book::all(); // select * from `book`

        //select * from `author` where `author`.`id` = "1" limit 1
//        select * from `author` where `author`.`id` = "1" limit 1
//        select * from `author` where `author`.`id` = "2" limit 1
/*        foreach ($books as $book) {
            echo $book->author->name;
        }*/

        // select * from `book`
        // select * from `author` where `author`.`id` in (1, 2)
        $books = Book::with('author')->get();

        foreach ($books as $book) {
            echo $book->author->name;
        }
    }
}
