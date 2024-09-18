<?php

namespace Modules\Category\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string','min:2','max:255'],
            'id' => ['required', '','min:1','max:255'],

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
            'id.max' => 'ایدی بسیار بلند است .',
            'id.min' => 'ایدی بسیار کوتاه  است .',
            'id.exists' => 'ان که انتخواب کرده اید وجود ندارد مطمعن شوید انتخواب کرده اید درست .',
            'id.required' => 'لطفا اول دسته بندی را نتخواب کنید  .',

        ];
    }
    public function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $errors = $validator->errors();

        if ($errors->has('name')) {
            // ریدایرکت به صفحه دسته‌بندی
            throw new \Illuminate\Validation\ValidationException($validator, redirect()->back()->withErrors($errors)->withInput());
        }

        if ($errors->has('id')) {
            // ریدایرکت به صفحه نام
            throw new \Illuminate\Validation\ValidationException($validator, redirect()->route('category.new')->withErrors($errors)->withInput());
        }
    }
}
