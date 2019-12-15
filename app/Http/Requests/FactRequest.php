<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FactRequest extends FormRequest
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

    public function rules()
    {
        return [
            "faits"=>"required"
        ];
    }

    public function messages()
    {
        return [
            "faits.required"=>"Le champ ne peut pas être vide"
        ];
    }
}
