<?php

namespace Module\User\Http\Controllers\Api\v1\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Module\User\Entity\User;
use Module\User\Mail\ResetPasswordMail;

class ResetPasswordController extends Controller
{
    public function sendMail(Request $request)
    {
        if (! $this->validateMail($request->email)){
            return $this->failedResponse();
        }
        $this->send($request->email);

        return $this->successResponse();
    }

    public function validateMail($mail)
    {
        return !! User::whereEmail($mail)->first();
    }

    public function failedResponse()
    {
        return \response()->json([
            'error' => "email not found"
        ],Response::HTTP_NOT_FOUND);
    }

    public function successResponse()
    {
        return \response()->json([
            'data' => "success"
        ],Response::HTTP_OK);
    }

    public function resetPasswordMail(Request $request)
    {
        $this->sendMail($request->email);
        return response()->json([
            'massage' => "check inbox",
            'email' => $request->email
        ],Response::HTTP_OK);
    }


    public function send($mail)
    {
        $token = $this->createToken($mail);

        Mail::to($mail)->send(new ResetPasswordMail($token,$mail));
    }

    public function createToken($mail)
    {
        $oldToken = DB::table('password_resets')->whereEmail($mail)->first();

        if ($oldToken){
            return $oldToken->token;
        }
        $token = Str::random(40);
        $this->saveToken($token,$mail);
        return $token;
    }

    public function saveToken($token,$mail)
    {
        DB::table('password_resets')->insert([
            'email' => $mail,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
    }
}
