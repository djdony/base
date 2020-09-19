<?php

namespace App\Http\Controllers;

use App\Http\Requests\LocationRequest;
use App\Models\Location;

class LocationController extends BaseController
{
    protected $name = 'locations';

    public function set_model()
    {
        return Location::class;
    }

    public function set_request()
    {
        return LocationRequest::class;
    }
}
