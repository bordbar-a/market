<?php

namespace App\Http\Controllers\Front\Basket;


use App\Helpers\FlashMessages\FlashMessages;
use App\Helpers\Number\Number;
use App\Http\Controllers\Front\FrontBaseController;
use App\Models\Product;
use App\Rules\Helper\AllItemIsIntRule;
use App\Rules\NationalCodeRule;
use App\Services\Basket\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use SebastianBergmann\Comparator\NumericComparator;

class BasketController extends FrontBaseController
{

    public function add(Request $request, $product_id)
    {
        $data = [
            'id' => $product_id,
        ];


        try {
            Basket::add($data);
        } catch (\Exception $exception) {
            FlashMessages::error('محصول به سبد اضافه نشد');
        }

        return back();
    }


    public function reset()
    {
        Basket::reset();
        return back();
    }


    public function addByCount(Request $request)
    {
        $request->validate([
           'id'=>'int',
           'count'=>'int',
        ]);

        $data = [
            'id' => $request->input('product'),
            'count' => $request->input('count'),
        ];


        try {
            Basket::add($data);
        } catch (\Exception $exception) {
            FlashMessages::error('محصول به سبد اضافه نشد');
        }

        return back();
    }


    public function index()
    {
        $basket_items = Basket::items();
        $total_price_without_discount = Basket::present()->getTotalPriceWithoutDiscount;
        $total_price_with_discount = Basket::present()->getTotalPriceWithDiscount;
        $discount = Basket::present()->discount;
        return view('front.basket.index',
            compact(['basket_items', 'total_price_without_discount', 'total_price_with_discount', 'discount']));
    }


    public function updateBasket(Request $request)
    {
        $request->validate([
                'count' => 'array',
            ]
        );

        $data = $request->count;

        $data = array_map(function ($item) {
            return intval($item);
        }, $data);


        Basket::setCount($data);
        return redirect()->route('front.basket.index');
    }


    public function remove($product_id)
    {

        Basket::remove($product_id);
        return back();
    }


    public function review()
    {
        $items = Basket::items();

        return view('front.basket.review' , compact($items));
    }


}
