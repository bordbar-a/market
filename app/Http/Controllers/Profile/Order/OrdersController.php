<?php

namespace App\Http\Controllers\Profile\Order;

use App\Http\Controllers\Profile\ProfileBaseController;
use App\Models\Order;
use App\Models\Product;
use App\Services\Basket\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OrdersController extends ProfileBaseController
{


    public function register()
    {



        $items = $this->convertBasketItemsToProductsItems();
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->price = Basket::totalWithDiscount();
        $order->ref_number = Str::random(30);

        $order->save();


        $result = $order->products()->saveMany($items , $this->createPivotOrderField());

        Basket::reset();
        return back();

    }


    private function convertBasketItemsToProductsItems()
    {


        return array_map(function ($item) {
            return Product::find($item->product_id);
        }, Basket::items());

    }


    private function createPivotOrderField()
    {


        return array_map(function ($item) {
            return [
                'price' => $item->price,
                'count' => $item->count,
                'discount' => $item->discount,
                'final_price' => $item->itemFinalPrice(),
            ];
        }, Basket::items());
    }
}
