<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends BaseController
{
    protected $name = 'users';

    public function set_model()
    {
        return User::class;
    }

    public function set_request()
    {
        return UserRequest::class;
    }
}
