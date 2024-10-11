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
            'name' => ['max:255'],
            'images' => ['image', 'max:255'],

            'parent_category' => [
                function ($attribute, $value, $fail) {
                    if ($value != 0) {
                        if ($value != -1) {
                            if (!DB::table('categorys')->where('id', $value)->exists()) {
                                $fail( trans('category::massages.select'),);
                            }
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
            'name.required' =>  trans('category::massages.required'),
            'name.string' => trans('category::massages.string'),
            'name.min' =>  trans('category::massages.min'),
            'name.max' =>  trans('category::massages.max'),
            'parent_category.exists' =>  trans('category::massages.exists'),

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
