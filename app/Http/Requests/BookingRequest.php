<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
            'from_id' => 'required',
            'to_id' => 'required',
            'date' => 'required',
            'flight' => '',
            'type' => '',
            'user_id' => '',
            'info' => '',
            'price' => '',
            'currency_id' => '',
            'customer_id' => 'required',
    ];
    }
}
