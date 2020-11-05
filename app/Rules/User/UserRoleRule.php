<?php

namespace App\Rules\User;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;

class UserRoleRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return key_exists($value , User::getUserRoles());
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'نقش وارد شده معتبر نمی‌باشد';
    }
}
