<?php

namespace App\Http\Requests\User;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ChangeUserPasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        $user_to_change_password = User::find($this->route('user_id'));

        if (!$user_to_change_password) {
            return false;
        }

        $loged_in_user = Auth::user();

        return $user_to_change_password->id === $loged_in_user->id;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password' => ['required'],
            'newPassword' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }


    public function messages()
    {
        return [
            'password.required' => 'رمزعبور فعلی را وارد کنید',
            'newPassword.required' => 'رمزعبور جدید را وارد کنید',
            'newPassword.min' => 'حداقل کاراکتر رمزعبور ۸ رقم باید باشد',
            'newPassword.confirmed' => 'تکرار رمز عبور اشتباه است',
        ];
    }
}
