<?php

namespace App\Http\Controllers\Front\Product;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{


    public function item(Request $request, $product)
    {

        if ($product instanceof Product) {
            $product->load([
                'comments' => function ($query) {
                    $query->where('status', Comment::APPROVED)->orderBy('created_at' , 'desc');
            } , 'pictures'
            ])->loadCount([
                'comments' => function ($query) {
                    $query->where('status', Comment::APPROVED);
                }
            ])->get();
            return view('front.product.item', compact('product'));
        }
        return redirect()->route('front.home');
    }
}
