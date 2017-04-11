<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoachSearchRequest extends FormRequest
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
            //
            'name'=>'nullable',
            'city'=>'nullable',
            'state'=>'nullable',
            'zip'=>'zip | nullable',
            'radius'=>'integer | nullable',
            'disciplines[]'=>'nullable',
            'level'=>'integer | nullable'
        ];
    }
}
