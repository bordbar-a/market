<?php


namespace App\Presenters\Order;


use App\Models\Order;
use App\Presenters\Contracts\Presenter;
use App\Presenters\Share\DateConvertor;

class OrderPresenter extends Presenter
{

    use DateConvertor;

    public function getStatus()
    {
        $map = [
            Order::PENDING => '<span class="label label-warning">در انتظار پرداخت</span>',
            Order::PAYED => '<span class="label label-success"> پرداخت شده </span>',
            Order::CANCELLATION => '<span class="label label-danger"> لغو شده </span>',
        ];
        if (isset($map[$this->entity->status])) {
            return ($map[$this->entity->status]);
        }

        return '<span class="label label-info">نامشخص</span>';
    }

}




