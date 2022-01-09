<?php

namespace Module\User\Http\Controllers\Api\v1\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Module\User\Entity\User;
use Module\User\Mail\ResetPasswordMail;

class ResetPassword extends Controller
{

    public function resetPasswordMail(Request $request)
    {
        $this->sendMail($request->email);
        return response()->json([
            'massage' => "check inbox"
        ],Response::HTTP_OK);
    }

    public function generateToken($mail)
    {
        $user = User::whereEmail($mail)->first();

        $token = auth()->login($user);

        return $token;
    }

    public function sendMail($mail)
    {
        $token = $this->generateToken($mail);

        Mail::to($mail)->send(new ResetPasswordMail($token));
    }
}
