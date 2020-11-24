<?php


namespace App\Services\Basket;


use App\Models\Product;
use App\Presenters\Basket\BasketItemPresenter;
use App\Presenters\Contracts\Presentable;

class BasketItem
{

    use Presentable;
    public $presenter = BasketItemPresenter::class;


    public $product_id;
    public $count;
    public $title;
    public $price;
    public $discount;


    public function __construct(int $product_id, int $count)
    {
        $product = $this->handleProductId($product_id);
        $this->product_id = $product->id;
        $this->count = $count;
        $this->title = $product->title;
        $this->price = $product->price;
        $this->discount = $product->discount;
    }

    private function handleProductId($product_id)
    {
        $product = Product::find($product_id);

        if (!$product instanceof Product) {
            throw new \Exception('the id of product in not correct');
        }
        return $product;
    }


    public static function total(array $items, $discount = false): int
    {

        if ($discount) {
            $total = array_reduce($items, function ($sum, BasketItem $item) {
                $item_price_with_discount = $item->price * ((100 - $item->discount) / 100);
                $sum += ($item_price_with_discount * $item->count);
                return $sum;
            });
        } else {
            $total = array_reduce($items, function ($sum, $item) {
                $sum += ($item->price * $item->count);
                return $sum;
            });
        }
        return (int)$total ?: 0;
    }


    public function itemFinalPrice(){
        return $this->price * ((100-$this->discount)/100) * $this->count;
    }


}
