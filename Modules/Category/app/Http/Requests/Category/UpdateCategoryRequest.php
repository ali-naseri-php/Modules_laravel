<?php

namespace Modules\Category\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
//        $this->dd('ali naseri');

        return [
            'name' => ['required', 'string', 'min:2', 'max:255'],

            'parent_category' => [
                function ($attribute, $value, $fail) {
                    if ($value != 0) {
                        if (! DB::table('categorys')->where('id', $value)->exists()) {
                            $fail('لطفا درست انتخواب کنید دسته بندی والد را .');
                        }
                    }
                },
            ],


        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function messages()
    {
        return [
            'name.required' => 'لطفاً نام را وارد کنید.',
            'name.string' => 'لطفا نام مناسب انتخواب کنید .',
            'name.min' => 'اسم بسیار کوتاه است .',
            'name.max' => 'اسم بسیار بلند است .',
            'parent_category.exists' => 'لطفا درست انتخواب نمایید  ',

        ];
    }

    public function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $errors = $validator->errors();

        if ($errors->has('name')) {
            throw new \Illuminate\Validation\ValidationException($validator, redirect()->back()->withErrors($errors)->withInput());
        }

        if ($errors->has('parent_category')) {
            throw new \Illuminate\Validation\ValidationException($validator, redirect()->back()->withErrors($errors)->withInput());
        }
    }
}
