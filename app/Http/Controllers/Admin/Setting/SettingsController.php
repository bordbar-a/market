<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Helpers\FlashMessages\FlashMessages;
use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SettingsController extends AdminBaseController
{
    public function all()
    {
        $settings = Setting::all();
        return view('admin.setting.list', compact('settings'));
    }

    public function save(Request $request)
    {

        $all_settings = $request->all();

        unset($all_settings['_token']);

        $validation_array = [];


        foreach ($all_settings as $key => $value) {
            $validation_array[] = 'exists:settings,key';
        }

        $validator = Validator::make(array_keys($all_settings), $validation_array);
        if ($validator->fails()) {
            FlashMessages::error('تنظیمات ذخیره نشد');
            return back();
        }

        foreach ($all_settings as $key=>$value){
            Setting::where('key' , $key)->update(['value'=>$value]);
        }

        return back();


    }
}
