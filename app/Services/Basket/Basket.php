<?php


namespace App\Services\Basket;

use Illuminate\Support\Facades\Facade;

/**
 * @method static Basket add(array $data)
 * @method static Basket remove(int $id)
 * @method static Basket totalWithDiscount()
 * @method static Basket totalWithoutDiscount()
 * @method static Basket reset()
 * @method static Basket items() : array
 * @method static Basket count()
 * @method static Basket forceSave($item)
 * @method static Basket products()
 *
 *
 */
class Basket extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'basket';
    }
}
