<?php

namespace Modules\ProductManagement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKalaRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'explanation' => 'required|string|min:10|max:500',
            'price' => 'required|numeric|min:0',
            'name' => 'required|string|min:2|max:255',
            'propertis' => 'array',
            'propertis.*' => 'string',
        ];
    }

    public function messages()
    {
        return [
            'image1.required' => 'آپلود تصویر اول الزامی است.',
            'image1.image' => 'فایل باید یک تصویر معتبر باشد.',
            'image1.mimes' => 'فرمت تصویر اول باید یکی از موارد: jpeg, png, jpg, gif, svg باشد.',
            'image1.max' => 'حجم تصویر اول نباید بیشتر از ۲ مگابایت باشد.',

            'image2.required' => 'آپلود تصویر دوم الزامی است.',
            'image2.image' => 'فایل باید یک تصویر معتبر باشد.',
            'image2.mimes' => 'فرمت تصویر دوم باید یکی از موارد: jpeg, png, jpg, gif, svg باشد.',
            'image2.max' => 'حجم تصویر دوم نباید بیشتر از ۲ مگابایت باشد.',

            'explanation.required' => 'وارد کردن توضیحات الزامی است.',
            'explanation.string' => 'توضیحات باید به صورت متن باشد.',
            'explanation.min' => 'توضیحات باید حداقل ۱۰ کاراکتر باشد.',
            'explanation.max' => 'توضیحات نباید بیشتر از ۵۰۰ کاراکتر باشد.',

            'price.required' => 'لطفاً قیمت را وارد کنید.',
            'price.numeric' => 'قیمت باید یک عدد معتبر باشد.',
            'price.min' => 'قیمت نمی‌تواند کمتر از ۰ باشد.',

            'name.required' => 'وارد کردن نام الزامی است.',
            'name.string' => 'نام باید به صورت متن باشد.',
            'name.min' => 'نام باید حداقل ۲ کاراکتر باشد.',
            'name.max' => 'نام نباید بیشتر از ۲۵۵ کاراکتر باشد.',

            'propertis.array' => 'خصوصیات باید یک آرایه باشد.',
            'propertis.*.exists' => 'مقدار انتخاب شده در لیست محصولات موجود نیست.',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
