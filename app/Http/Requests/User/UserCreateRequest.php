<?php

namespace App\Http\Requests\User;

use App\Rules\NationalCodeRule;
use App\Rules\User\UserRoleRule;
use App\Rules\User\UserStatusRule;
use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstName' => 'required|min:2|max:20',
            'lastName' => 'required|min:2|max:20',
            'email' => 'required|unique:users,email',
            'mobile' => 'nullable|regex:/^09[0-9]{9}$/',
            'nationalCode' => ['nullable' , new NationalCodeRule()],
            'password' => 'required',
            'role' => new UserRoleRule(),
            'status' => new UserStatusRule(),
        ];
    }
}
