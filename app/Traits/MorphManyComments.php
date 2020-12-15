<?php


namespace App\Traits;
use App\Models\Comment;

trait MorphManyComments
{


    public function comments(){
        return $this->morphMany(Comment::class , 'commentable');
    }
}
