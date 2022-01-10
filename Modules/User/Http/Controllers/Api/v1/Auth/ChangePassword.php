<?php

namespace Module\User\Http\Controllers\Api\v1\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Module\User\Entity\User;


class ChangePassword extends Controller
{
    public function changePassword(Request $request)
    {
        $user = User::whereEmail($request->email);
        $user->update([
            'password' => Hash::make($request->password)
        ]);

        return 'ok';
    }
}