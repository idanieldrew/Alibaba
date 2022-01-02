<?php

use Illuminate\Support\Facades\Route;
use Module\User\Http\Controllers\Api\v1\Auth\AuthController;

Route::group(['prefix' => 'auth'], function (){
        Route::post('/login',[AuthController::class,'login'])->name('login');
        Route::post('/register',[AuthController::class,'register'])->name('register');
        Route::post('/logout',[AuthController::class,'logout'])->name('logout');

});
