<?php


namespace App\Services\Basket\Providers;


use App\Services\Basket\Contracts\IBasket;
use Illuminate\Support\Facades\Session;

class SessionBasketProvider implements IBasket
{


    public function add(array $item)
    {

        $this->handleBasketExist();
        $item['count'] = $item['count'] ?? 1;
        $items = $this->updateBasketItems($item);

        Session::put('basket', $items);
    }


    public function remove(int $item_id)
    {

        $items = $this->items();
        if (!key_exists($item_id, $items)) {
            return null;
        }
        unset($items[$item_id]);
        Session::put('basket', $items);

    }

    public function total()
    {
        $items = $this->items();

        $total = array_reduce($items, function ($sum, $item) {
            $sum += ($item['price'] * $item['count']);
            return $sum;
        });
        return $total;
    }


    public function reset()
    {
        session()->forget('basket');
    }


    public function items()
    {
        return Session::get('basket') ?? array();
    }


    public function isInBasket(int $product_id)
    {
        return key_exists($product_id, $this->items());
    }


    public function count()
    {
        return count($this->items());
    }


    private function handleBasketExist(): void
    {
        if (!Session::exists('basket')) {
            Session::put('basket');
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
            $items[$item['id']]['count'] += $item['count'];
            return $items;
        }
        $items[$item['id']] = [
            'count' => $item['count'],
            'title' => $item['title'],
            'price' => $item['price'],
        ];

        return $items;
    }


}
