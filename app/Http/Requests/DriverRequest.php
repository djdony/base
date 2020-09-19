<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Driver;
use Illuminate\Validation\Rule;

class DriverRequest extends FormRequest
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
            'name' => 'required|unique:drivers',
            'phone' => '',
            'email' => 'nullable|email',
            'last_name' => ''
        ];

        if ($this->route('driver')){
            $rules['name'] = [
                'name' => [
                    'required',
                    Rule::unique('drivers')->ignore($this->route('driver'))
                ]
            ];
        }
        return $rules;
    }
}
