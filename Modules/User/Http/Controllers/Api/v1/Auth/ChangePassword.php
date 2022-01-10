<?php

namespace Module\User\Http\Controllers\Api\v1\Auth;

use App\Http\Controllers\Controller;

class ChangePassword extends Controller
{
    public function changePassword()
    {
        dd(request()->all());
    }

    public function updatePsw()
    {

    }
}