<?php

use Illuminate\Support\Facades\Route;
use Module\User\Http\Controllers\Api\v1\Auth\AuthController;
use Module\User\Http\Controllers\Api\v1\Auth\ChangePassword;
use Module\User\Http\Controllers\Api\v1\Auth\ResetPassword;

Route::group(['prefix' => 'auth'], function (){

        // Login
        Route::post('/login',[AuthController::class,'login'])->name('login');

        //Register
        Route::post('/register',[AuthController::class,'register'])->name('register');

        // Logout
        Route::post('/logout',[AuthController::class,'logout'])->name('logout');

        // Reset Password
        Route::post('/reset-password',[ResetPassword::class,'resetPasswordMail'])->name('reset-password');

        // Change Password
        Route::post('/change-password',[ChangePassword::class,'changePassword'])->name('change-password');
});
