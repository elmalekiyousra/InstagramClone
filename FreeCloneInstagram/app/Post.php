<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commenter;

class Post extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
}
