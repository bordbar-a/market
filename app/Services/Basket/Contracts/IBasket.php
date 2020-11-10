<?php


namespace App\Services\Basket\Contracts;


interface IBasket
{

    public function add(array $item);

    public function remove(int $item_id);

    public function total();

    public function reset();

    public function items();

    public function count();

    public function isInBasket(int $item_id);


}
