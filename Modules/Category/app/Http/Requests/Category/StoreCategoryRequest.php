<?php

namespace Modules\Category\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class StoreCategoryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string','min:2','max:255'],
            'images' => ['required', 'image','max:10000'],
            'id' => ['required', function ($attribute, $value, $fail) {
                if ($value != 0) {
                    if (! DB::table('categorys')->where('id', $value)->exists()) {
                        $fail('لطفا درست انتخواب کنید دسته بندی والد را .');
                    }
                }
            },],

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
            'name.required' =>trans('category::massages.required'),
            'name.string' => trans('category::massages.string'),
            'name.min' => trans('category::massages.min'),
            'name.max' =>trans('category::massages.max'),
            'id.max' =>trans('category::massages.max'),
            'id.min' => trans('category::massages.min'),
            'id.exists' => trans('category::massages.exists'),
            'images.required' => trans('category::massages.required'),
            'images.max' =>trans('category::massages.max'),
            'images.image' =>trans('category::massages.image'),

        ];
    }
    public function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $errors = $validator->errors();

        if ($errors->has('name')) {
            // ریدایرکت به صفحه دسته‌بندی
            throw new \Illuminate\Validation\ValidationException($validator, redirect()->back()->withErrors($errors)->withInput());
        }
        if ($errors->has('images')) {
            // ریدایرکت به صفحه دسته‌بندی
            throw new \Illuminate\Validation\ValidationException($validator, redirect()->back()->withErrors($errors)->withInput());
        }

        if ($errors->has('id')) {
            // ریدایرکت به صفحه نام
            throw new \Illuminate\Validation\ValidationException($validator, redirect()->route('category.new')->withErrors($errors)->withInput());
        }
    }
}
