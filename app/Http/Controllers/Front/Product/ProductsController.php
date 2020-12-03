<?php

namespace App\Http\Controllers\Front\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{


    public function item(Request $request, $product)
    {

        if ($product instanceof Product) {
            return view('front.product.item', compact('product'));
        }
        return redirect()->route('front.home');
    }
}
