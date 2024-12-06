<?php

namespace Modules\Account\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoleUserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return  [
            'role' => 'required|exists:roles,id',
            'user' => 'required|exists:users,id',
        ] ;
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
