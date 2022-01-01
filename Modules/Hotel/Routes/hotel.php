<?php

use Illuminate\Support\Facades\Route;
use Module\Hotel\Http\Controller\Api\v1\HotelController;

Route::get('/',[HotelController::class,'index']);