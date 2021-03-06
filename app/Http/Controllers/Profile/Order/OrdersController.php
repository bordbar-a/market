<?php

namespace App\Http\Controllers\Profile\Order;

use App\Helpers\FlashMessages\FlashMessages;
use App\Http\Controllers\Profile\ProfileBaseController;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Services\Basket\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class OrdersController extends ProfileBaseController
{


    public function register()
    {

        if (Gate::denies('create' , Order::class)){
            FlashMessages::error('حساب شما غیر فعال است');
            return redirect()->route('profile.dashboard');
        }

        $items = $this->convertBasketItemsToProductsItems();
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->price = Basket::totalWithDiscount();
        $order->discount_price = Basket::totalDiscount();
        $order->ref_number = Str::random(30);

        $order->save();

        $result = $order->products()->saveMany($items, $this->createPivotOrderField());
        Basket::reset();
        return redirect()->route('profile.order.list');
    }


    public function list()
    {
        $orders = Auth::user()->orders()->orderBy('updated_at', 'DESC')->get();
        return view('profile.order.list', compact('orders'));
    }


    public function products(Request $request, $order_id)
    {
        $order = Order::with('products')->find($order_id);

        if (!$this->userHasThisOrder($order)) {
            return redirect()->route('profile.order.list');
        }

        return view('profile.order.products.list', compact('order'));
    }


    public function edit($order_id)
    {
        $order = Order::with('products')->find($order_id);


        if (!$this->userHasThisOrder($order)) {
            return redirect()->route('profile.order.list');
        }

        if (!$order->hasStatus(Order::PENDING)) {
            FlashMessages::error('این سفارش قابل تغییر نمی‌باشد');
            return redirect()->route('profile.order.list');
        }
        foreach ($order->products as $product) {
            Basket::add(['id' => $product->id, 'count' => $product->pivot->count]);
        }
        $order->setStatus(Order::CANCELLATION);
        return redirect()->route('front.basket.index');

    }


    public function delete($order)
    {

        if (!$this->userHasThisOrder($order)) {
            return redirect()->route('profile.order.list');
        }

        if ($order->hasStatus(Order::PENDING)) {
            $order->setStatus(Order::CANCELLATION);
            $order->save();
        }
        $order->delete();
        return redirect()->route('profile.order.list');
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


    private function userHasThisOrder(Order $order)
    {
        if (Gate::allows('hasThisOrder', $order)) {
            return true;
        }

        FlashMessages::error('درخواست مورد نظر پیدا نشد');
        return false;
    }
}
