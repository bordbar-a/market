<?php

namespace App\Models;

use App\Presenters\Comment\CommentPresenter;
use App\Presenters\Contracts\Presentable;
use App\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{


    use BelongsToUser, Presentable;

    public $presenter = CommentPresenter::class;

    const DEPENDING = 0;
    const APPROVED = 1;
    const UNAPPROVED = 2;


    protected $guarded = [
        'id'
    ];


//   Define relation

    public function commentable()
    {
        return $this->morphTo();
    }


// End relation


    public static function getStatuses()
    {
        return [
            self::DEPENDING => 'در انتظار',
            self::APPROVED => 'تایید شده',
            self::UNAPPROVED => 'رد شده',
        ];
    }
}
