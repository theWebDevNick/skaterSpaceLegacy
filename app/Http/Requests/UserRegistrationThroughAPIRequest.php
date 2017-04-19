<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegistrationThroughAPIRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|max:150',
            'last_name' => 'required|max:150',
            'email' => 'required|email|max:150|unique:users',
            'password' => 'required|min:6|',
            'zip'=>'required|regex:/\b\d{5}\b/',
            'is_coach'=>'required | boolean',
            'disciplines[]'=>'array',
            'coaching_disciplines[]'=>'array'
        ];
    }
}
