<?php


namespace App\Helpers\Setting;


use App\Helpers\Setting\Facade\Setting;
use Illuminate\Support\Facades\Facade;

class SettingHelper
{
    public function get($name)
    {
        $setting = \App\Models\Setting::where('key', $name)->first();
        if ($setting instanceof \App\Models\Setting) {
            debug($setting->value);
            return $setting->value;
        }
        return '#';
    }

}
