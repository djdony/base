<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Location;
use App\Models\Setting;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $settings = Setting::findOrFail(1);
        $locations = Location::whereIn('type', [4,5])->pluck('name','id');
        return view('site.index', [
            'data' => $settings,
            'locations' => $locations
        ]);
    }

    public function faq(){
        $faqs = Faq::all()->sortBy('sort_order');
        return view('site.sss', [
            'faqs' => $faqs,
        ]);
    }
}
