<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
     * Validation rules
     *
     * @var array
     */
    public function rules() {
        $rules = [
            'name'=>'required|unique:cars,name,NULL,id,deleted_at,NULL',
            'car_type_id' => 'required',
            'max_pax' => 'required',
            'images.*' => '',
            'description' => '',
        ];
        if ($this->route('car')){
            $rules['name'] = [
                'required',
                Rule::unique('cars')->ignore($this->route('car'))->whereNull('deleted_at')];
        }
        return $rules;

    }

}
