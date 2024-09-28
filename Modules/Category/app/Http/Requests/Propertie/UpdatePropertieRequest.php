<?php

namespace Modules\Category\Http\Requests\Propertie;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePropertieRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'id_category' => ['required', 'exists:categorys,id'],

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
            'id_category.max' => 'ایدی بسیار بلند است .',
            'id_category.min' => 'ایدی بسیار کوتاه  است .',
            'id_category.exists' => 'ان که انتخواب کرده اید وجود ندارد مطمعن شوید انتخواب کرده اید درست .',
            'id_category.required' => 'لطفا اول دسته بندی را نتخواب کنید  .',

        ];
    }

    public function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $errors = $validator->errors();

        if ($errors->has('name')) {
            // ریدایرکت به صفحه دسته‌بندی
            throw new \Illuminate\Validation\ValidationException($validator, redirect()->back()->withErrors($errors)->withInput());
        }

        if ($errors->has('id_category')) {
            // ریدایرکت به صفحه نام
            throw new \Illuminate\Validation\ValidationException($validator, redirect()->back()->withErrors($errors)->withInput());
        }
    }
}
