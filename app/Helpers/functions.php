<?php


if (!function_exists('getSetting')) {


    function getSetting($key)
    {
        return \App\Helpers\Setting\Facade\Setting::get($key);

    }
}
