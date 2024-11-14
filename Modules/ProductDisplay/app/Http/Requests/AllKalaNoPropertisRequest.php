<?php

namespace Modules\ProductDisplay\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class AllKalaNoPropertisRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        //dd($this->route('id_category'));
        $id_category = $this->route('id_category');

        return [
            'id_category' => ['required', 'max:255','exists:categorys,id'],
            'page'=>'integer'];
    }

    public function validationData()
    {
        // اضافه کردن پارامتر URL به داده‌های ورودی برای ولیدیشن
        return array_merge($this->all(), [
            'id_category' => $this->route('id_category'),
        ]);
    }

    public function messages()
    {
        return [
            'id_category.required' => 'a category required',
            'id_category.max' => 'a category max 255 caracter ',
            'id_category.exists' => 'a data no tabla category',
            'page.numeric' => 'numeric in page ',
            'q.numeric' => 'numeric in q ',

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
