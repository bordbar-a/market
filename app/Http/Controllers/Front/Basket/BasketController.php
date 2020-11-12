<?php

namespace App\Http\Controllers\Front\Basket;


use App\Http\Controllers\Front\FrontBaseController;
use App\Models\Product;
use App\Services\Basket\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BasketController extends FrontBaseController
{

    public function add(Request $request, $product_id)
    {
        $product = Product::find($product_id);
        if ($product && $product instanceof Product) {

            $data = [
                'id' => $product->id,
                'title' => $product->title,
                'price' => $product->price,
            ];
            Basket::add($data);
        }
        return back();
    }


    public function reset()
    {
        Basket::reset();
        return back();
    }


    public function addByCount(Request $request){

        $product = Product::find($request->input('product'));
        if ($product && $product instanceof Product) {

            $data = [
                'id' => $product->id,
                'title' => $product->title,
                'count' => $request->input('count'),
                'price' => $product->price,
            ];
            Basket::add($data);
        }
        return back();
    }


}
