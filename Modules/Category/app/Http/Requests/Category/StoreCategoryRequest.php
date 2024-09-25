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
            'name.required' => 'لطفاً نام را وارد کنید.',
            'name.string' => 'لطفا نام مناسب انتخواب کنید .',
            'name.min' => 'اسم بسیار کوتاه است .',
            'name.max' => 'اسم بسیار بلند است .',
            'id.max' => 'ایدی بسیار بلند است .',
            'id.min' => 'ایدی بسیار کوتاه  است .',
            'id.exists' => 'ان که انتخواب کرده اید وجود ندارد مطمعن شوید انتخواب کرده اید درست .',
            'images.required' => 'لطفا عکس را انتخواب کنید  .',
            'images.max' => 'عکس بسیار بزر است لطفا از حجم ان بکاهید  .',
            'images.image' => 'فایل ارسالی عکس نبود ! ',

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
