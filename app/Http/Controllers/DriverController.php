<?php

namespace App\Http\Controllers;

use App\Http\Requests\DriverRequest;
use App\Models\Driver;


class DriverController extends BaseController
{
    protected $name = 'drivers';
    public function set_model()
    {
        return Driver::class;
    }

    public function set_request()
    {
        return DriverRequest::class;
    }


}
