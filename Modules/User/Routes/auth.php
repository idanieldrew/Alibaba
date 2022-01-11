<?php

use Illuminate\Support\Facades\Route;
use Module\User\Http\Controllers\Api\v1\Auth\AuthController;
use Module\User\Http\Controllers\Api\v1\Auth\ChangePasswordController;
use Module\User\Http\Controllers\Api\v1\Auth\ResetPasswordController;

Route::group(['prefix' => 'auth'], function (){

        // Login
        Route::post('/login',[AuthController::class,'login'])->name('login');

        //Register
        Route::post('/register',[AuthController::class,'register'])->name('register');

        // Logout
        Route::post('/logout',[AuthController::class,'logout'])->name('logout');

        // Reset Password
        Route::post('/reset-password',[ResetPasswordController::class,'sendMail'])->name('reset-password');

        // Change Password
        Route::post('/change-password',[ChangePasswordController::class,'passwordResetProcess'])->name('change-password');
});
