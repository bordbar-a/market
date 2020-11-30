<?php


namespace App\Services\Basket\Providers;


use App\Helpers\FlashMessages\FlashMessages;
use App\Models\Product;
use App\Services\Basket\BasketItem;
use App\Services\Basket\Contracts\BasketContract;
use Illuminate\Support\Facades\Session;

class SessionBasketProvider extends BasketContract
{

    private static $SESSION_NAME = 'basket';

    /**
     * @param array $item
     */
    public function add(array $item)
    {
        $this->handleBasketExist();
        $item['count'] = $item['count'] ?? 1;
        $items = $this->updateBasketItems($item);
        $this->saveBasket($items);
    }

    public function setCount($items)
    {
        $basket_items = $this->items();

        foreach ($items as $product_id => $count) {
            if ($this->isInBasket($product_id)) {
                $basket_items[$product_id]->count = $count;
            }
        }

        $this->saveBasket($basket_items);
    }

    public function remove(int $item_id)
    {

        $items = $this->items();
        if (!$this->isInBasket($item_id)) {
            return null;
        }
        unset($items[$item_id]);

        $this->saveBasket($items);

    }


    public function totalWithDiscount(): int
    {
        $items = $this->items();
        return BasketItem::total($items, true);
    }


    public function totalWithoutDiscount(): int
    {
        $items = $this->items();
        return BasketItem::total($items);
    }


    public function reset()
    {
        session()->remove(self::$SESSION_NAME);
    }


    public function items(): array
    {
        if (!Session::get(self::$SESSION_NAME)) {
            return [];
        }
        $items = Session::get(self::$SESSION_NAME);
        $items = array_map(function ($item) {
            return unserialize($item);
        }, $items);

        return $items;
    }


    public function isInBasket(int $product_id)
    {
        return key_exists($product_id, $this->items());
    }


    public function count()
    {
        return count($this->items());
    }


    public function forceSave($items)
    {
        $this->saveBasket($items);
    }


    private function handleBasketExist(): void
    {
        if (!Session::exists(self::$SESSION_NAME)) {
            $this->saveBasket([]);
        }
    }


    /**
     * @param $item array
     * @return array
     */
    private function updateBasketItems(array $item): array
    {
        $items = $this->items();
        if ($this->isInBasket($item['id'])) {
            $items[$item['id']]->count += $item['count'];
            return $items;
        }


        $basket_item = new BasketItem($item['id'], $item['count']);
        $items[$item['id']] = $basket_item;
        return $items;


    }


    private function saveBasket(array $items)
    {

        foreach ($items as $item) {
            if ($item->count == 0) {
                unset($items[$item->product_id]);
            }
        }

        $items = array_map(function ($item) {
            return serialize($item);
        }, $items);

        Session::put(self::$SESSION_NAME, $items);
    }


}
