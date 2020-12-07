<?php


namespace App\Helpers\Setting;


use Illuminate\Support\Facades\Facade;

class SettingHelper
{
    public function get($name)
    {
        $setting = \App\Models\Setting::where('key', $name)->first();
        if ($setting) {
            return $setting->value;
        }
        return '#';
    }

}
