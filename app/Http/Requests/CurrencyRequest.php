<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CurrencyRequest extends FormRequest
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
        $rules= [
            'name' => 'required|unique:currencies',
            'phone' => '',
            'email' => 'nullable|email',
            'last_name' => ''
        ];

        if ($this->route('currency')){
            $rules['name'] = [
                'name' => [
                    'required',
                    Rule::unique('currencies')->ignore($this->route('currency'))
                ]
            ];
        }
        return $rules;
    }
}
