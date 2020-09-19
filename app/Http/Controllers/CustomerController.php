<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends BaseController
{
    protected $name = 'customers';

    public function set_model()
    {
        return Customer::class;
    }

    public function set_request()
    {
        return CustomerRequest::class;
    }
}
