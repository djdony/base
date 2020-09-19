<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarTypeRequest;
use App\Models\CarType;

class CarTypeController extends BaseController
{
    protected $name = 'carTypes';

    public function set_model()
    {
        return CarType::class;
    }

    public function set_request()
    {
        return CarTypeRequest::class;
    }
}
