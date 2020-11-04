<?php

namespace App\Http\Requests\Category;

use App\Rules\Category\ParentIdRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateCategoryRequest extends FormRequest
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
            'title' => [
                'required',
                'max:50',
                'min:2',
            ],
            'parentId' => [
                'required',
                new ParentIdRule(),

            ]
        ];
    }


    public function messages()
    {
        return [
            'title.required'=>'وارد کردن عنوان الزامی می‌باشد',
            'title.min'=>'حداقل دو حرف برای عنوان باید وارد شود',
            'parentId.required' => 'مشکلی در وارد شدن والد وجود دارد',
        ];
    }
}
