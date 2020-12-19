<?php


if (!function_exists('getSetting')) {


    function getSetting($key)
    {
        return \App\Helpers\Setting\Facade\Setting::get($key);

    }
}


if (!function_exists('getUser')) {


    function getUser()
    {

        if (!\Illuminate\Support\Facades\Auth::check()) {
            return null;
        }
        return \Illuminate\Support\Facades\Auth::user();
    }
}
if (!function_exists('getProductImageUrl')) {

    function getProductImageUrl($product_id , $image_name)
    {
     return \Illuminate\Support\Facades\Storage::disk('ProductImages')->url($product_id . '/' . $image_name);
    }
}
