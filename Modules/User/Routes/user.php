<?php

use Illuminate\Support\Facades\Route;
use Module\User\Http\Controllers\Api\v1\Order\FlightOrderController;

Route::group(['prefix' => 'order'],function (){

    Route::middleware('guest')->get('/select-flight',[FlightOrderController::class,'select']);

    Route::middleware('auth:api')->post('/add-passenger',[FlightOrderController::class,'createPassenger']);
});

require __DIR__ . '/auth.php';
