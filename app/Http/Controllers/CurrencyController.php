<?php

namespace App\Http\Controllers;

use App\Http\Requests\CurrencyRequest;
use App\Models\Currency;

class CurrencyController extends BaseController
{
    protected $name = 'currencies';

    public function set_model()
    {
        return Currency::class;
    }

    public function set_request()
    {
        return CurrencyRequest::class;
    }
}
