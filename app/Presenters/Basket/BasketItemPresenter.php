<?php


namespace App\Presenters\Basket;


use App\Helpers\Number\Number;
use App\Presenters\Contracts\Presenter;

class BasketItemPresenter extends Presenter
{


    public function getPrice()
    {

        return Number::numberSeparator($this->entity->price);
    }

    public function getPriceByDiscount()
    {

        return Number::numberSeparator($this->entity->price * ((100 - $this->entity->discount) / 100));
    }

    public function getTotalPriceWithoutDiscount()
    {
        return Number::numberSeparator($this->entity->count * $this->entity->price);
    }


    public function getTotalPriceWithDiscount()
    {
        return Number::numberSeparator($this->entity->count * $this->entity->price * ((100 - $this->entity->discount) / 100));
    }


}
