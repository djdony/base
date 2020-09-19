<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateBookingRequest;
use App\Models\Booking;

class BookingController extends BaseController
{
    protected $name = 'bookings';

    public function set_model()
    {
        return Booking::class;
    }

    public function set_request()
    {
        return UpdateBookingRequest::class;
    }
}
