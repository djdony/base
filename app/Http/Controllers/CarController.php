<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends BaseController
{
    protected $name = 'cars';

    public function set_model()
    {
        return Car::class;
    }

    public function set_request()
    {
        return CarRequest::class;
    }
}
