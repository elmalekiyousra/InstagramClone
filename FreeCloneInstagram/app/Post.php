<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;
use Laravelista\Comments\Commenter;

class Post extends Model
{
    use Commentable;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
