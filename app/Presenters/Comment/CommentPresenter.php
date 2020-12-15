<?php


namespace App\Presenters\Comment;


use App\Models\Comment;
use App\Presenters\Contracts\Presenter;
use App\Presenters\Share\DateConverter;
use Illuminate\Support\Str;

class CommentPresenter extends Presenter
{

    use DateConverter;


    public function getContent()
    {
        return Str::substr($this->entity->content, 0, 10) . '...';
    }

    public function getStatus()
    {

        $statuses = Comment::getStatuses();

        if (!array_key_exists($this->entity->status, $statuses)) {
            return 'نا مشخص';
        }

        $status_icons = [
            Comment::DEPENDING =>'warning',
            Comment::APPROVED =>'success',
            Comment::UNAPPROVED =>'danger',
        ];

        $status = "<span class='btn btn-" . $status_icons[$this->entity->status].  " btn-xs'>". $statuses[$this->entity->status] ."</span>";

        return $status ;
    }
}
