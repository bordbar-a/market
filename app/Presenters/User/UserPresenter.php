<?php


namespace App\Presenters\User;


use App\Models\User;
use App\Presenters\Contracts\Presenter;

class UserPresenter extends Presenter
{


    public function getRole()
    {
        $map = [
            User::User => 'کاربر عادی',
            User::Admin => 'مدیر',
            User::Editor => 'نویسنده'
        ];

        if (isset($map[$this->entity->role])) {
            return $map[$this->entity->role];
        }
        return 'تعریف نشده';

    }


    public function getStatus()
    {


        $map = [
            User::PENDING => '<span class="label label-warning"> تایید نشده </span>',
            User::ACTIVE => '<span class="label label-success"> فعال </span>',
            User::INACTIVE => '<span class="label label-danger"> غیرفعال </span>',
        ];


        if (isset($map[$this->entity->status])) {
            return ($map[$this->entity->status]);
        }

        return '<span class="label label-info">N/A</span>';
    }

}
