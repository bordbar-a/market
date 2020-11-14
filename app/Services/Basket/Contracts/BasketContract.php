<?php


namespace App\Services\Basket\Contracts;


use App\Presenters\Basket\BasketPresenter;
use App\Presenters\Contracts\Presentable;

abstract class BasketContract
{

    use Presentable;
    public $presenter = BasketPresenter::class;

    public abstract function add(array $item);

    public abstract function setCount(array $item);

    public abstract function remove(int $item_id);

    public abstract function totalWithDiscount(): float ;

    public abstract function totalWithoutDiscount():float;

    public abstract function reset();

    public abstract function items(): array;

    public abstract function count();

    public abstract function isInBasket(int $item_id);


}
