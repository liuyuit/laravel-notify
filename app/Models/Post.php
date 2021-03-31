<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function comment()
    {
        return $this->morphOne(Comment::class, 'commentable', 'taggables');
    }

    public function tags()
    {
        return $this->morphTOMany(Tag::class, 'taggable', 'taggables');
    }
}
