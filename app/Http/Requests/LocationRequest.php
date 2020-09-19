<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Location;

class LocationRequest extends FormRequest
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
        return [
            'name' => 'required',
            'type' => 'required',
            'code' => '',
            'lat' => '',
            'lon' => '',
            'parent_id' => '',
            '_lft' => '',
            '_rgt' => '',
        ];
    }

}
