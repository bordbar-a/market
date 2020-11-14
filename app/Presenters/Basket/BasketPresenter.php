<?php


namespace App\Presenters\Basket;


use App\Helpers\Number\Number;
use App\Presenters\Contracts\Presenter;
use App\Services\Basket\Basket;


class BasketPresenter extends Presenter
{

    public function getTotalPriceWithoutDiscount()
    {
        return Number::numberSeparator(Basket::totalWithoutDiscount());
    }


    public function getTotalPriceWithDiscount()
    {
        return Number::numberSeparator(Basket::totalWithDiscount());
    }

    public function discount()
    {
        return Number::numberSeparator(Basket::totalWithoutDiscount() - Basket::totalWithDiscount());
    }


}
