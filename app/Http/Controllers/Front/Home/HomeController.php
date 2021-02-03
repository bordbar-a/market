<?php

namespace App\Http\Controllers\Front\Home;
use App\Http\Controllers\Front\FrontBaseController;
use App\Models\Product;
use App\Models\Slider;
use App\Models\SliderItem;
use Illuminate\Http\Request;

class HomeController extends FrontBaseController
{

    public function index(){


        $products = Product::with('pictures')->get();
        $slider= Slider::where('name' , Slider::FIRST_PAGE_SLIDER_NAME)->with(['items'=>function($query){
            $query->orderBy('order' , 'asc');
        },'items.image'])->first();

//        $sliderItems->load(['image']);
        return view('front.index' , compact('products' , 'slider'));
    }
}
