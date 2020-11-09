<?php

namespace App\Http\Controllers\Front\Home;
use App\Http\Controllers\Front\FrontBaseController;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends FrontBaseController
{

    public function index(){


        $products = Product::all();

        return view('front.index' , compact('products'));
    }
}
