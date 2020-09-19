<?php

namespace App\Http\Controllers;

use App\Http\Requests\FaqRequest;
use App\Models\Faq;

class FaqController extends BaseController
{
    protected $name = 'faqs';

    public function set_model()
    {
        return Faq::class;
    }

    public function set_request()
    {
        return FaqRequest::class;
    }
}
