<?php


if (!function_exists('getSetting')) {


    function getSetting($key)
    {
        return \App\Helpers\Setting\Facade\Setting::get($key);

    }

    function getUser()
    {

        if (!\Illuminate\Support\Facades\Auth::check()) {
            return null;
        }
        return \Illuminate\Support\Facades\Auth::user();
    }
}
