<?php


namespace App\Services\Basket;

use Illuminate\Support\Facades\Facade;

/**
 * @method static Basket add(array $data)
 * @method static Basket remove(int $id)
 * @method static Basket totalWithDiscount()
 * @method static Basket totalWithoutDiscount()
 * @method static Basket reset()
 * @method static Basket items()
 * @method static Basket count()
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
