<?php

use Illuminate\Support\Facades\Route;
use Module\User\Http\Controllers\Api\v1\Order\OrderFlightController;

Route::get('/select-flight',[OrderFlightController::class,'select']);

require __DIR__ . '/auth.php';
