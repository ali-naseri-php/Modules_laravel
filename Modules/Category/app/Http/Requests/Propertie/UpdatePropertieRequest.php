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
            'name.required' => trans('category::massages.required'),
            'name.string' => trans('category::massages.string'),
            'name.min' => trans('category::massages.min'),
            'name.max' =>  trans('category::massages.max'),
            'id_category.max' => trans('category::massages.max'),
            'id_category.min' =>  trans('category::massages.min'),
            'id_category.exists' =>  trans('category::massages.exists'),
            'id_category.required' => trans('category::massages.required'),

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
