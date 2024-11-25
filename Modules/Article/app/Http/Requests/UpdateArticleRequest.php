<?php

namespace Modules\Article\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'min:2', 'max:250'],
            'id' => ['required', 'exists:articles,id'],
            'body' => ['required', 'min:2', 'max:250'],
            'image' => ['required', 'image', 'max:20000']
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
