<?php

use Illuminate\Support\Facades\Route;
use Module\Flight\Http\Controllers\Api\v1\FlightController;

Route::get('/',[FlightController::class,'index']);