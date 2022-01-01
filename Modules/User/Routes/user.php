<?php

use Illuminate\Support\Facades\Route;
use Module\User\Http\Controllers\Api\v1\Auth\AuthController;

Route::get('/',[AuthController::class,'login']);