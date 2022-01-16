<?php

namespace Module\User\Http\Controllers\Api\v1\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Module\User\Entity\User;

class ChangePasswordController extends Controller
{
    public function passwordResetProcess(Request $request){
        return $this->updatePasswordRow($request)->count() > 0 ? $this->resetPassword($request) : $this->tokenNotFoundError();
    }

    // Verify if token is valid
    private function updatePasswordRow($request){
        return DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $request->resetToken
        ]);
    }

    // Token not found response
    private function tokenNotFoundError() {
        return response()->json([
            'error' => 'Either your email or token is wrong.'
        ],Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    // Reset password
    private function resetPassword($request) {
        // find email
        $userData = User::whereEmail($request->email)->first();
        // update password
        $userData->update([
            'password'=>bcrypt($request->password)
        ]);
        // remove verification data from db
        $this->updatePasswordRow($request)->delete();


        return response()->json([
            'data'=>'Password has been updated.'
        ],Response::HTTP_CREATED);
    }
}