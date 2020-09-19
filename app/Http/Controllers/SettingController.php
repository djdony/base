<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use App\Models\Setting;


class SettingController extends BaseController
{
    protected $name = 'settings';

    public function set_model()
    {
        return Setting::class;
    }

    public function set_request()
    {
        return SettingRequest::class;
    }
}
