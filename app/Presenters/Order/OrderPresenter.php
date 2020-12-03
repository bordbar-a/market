<?php


namespace App\Presenters\Order;


use App\Helpers\Number\Number;
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

    public function getPrice()
    {
        return Number::numberSeparator($this->entity->price) . ' ریال';
    }

    public function getTotalDiscount()
    {

        if ($this->entity->discount_price===0) {
            return 'این سفارش شامل تخفیف نبوده';
        }
        return Number::numberSeparator($this->entity->discount_price) . ' ریال';
    }

    public function getOrderOwner()
    {
        return $this->entity->user->first_name . ' ' . $this->entity->user->last_name;
    }

    public function getTotalPriceWithoutDiscount()
    {
        return Number::numberSeparator($this->entity->price + $this->entity->discount_price);
    }

}




