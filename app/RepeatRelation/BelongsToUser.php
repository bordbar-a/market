<?php


namespace App\RepeatRelation;


use App\Models\User;

trait BelongsToUser
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
