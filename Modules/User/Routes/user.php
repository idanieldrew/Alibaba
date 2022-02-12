<?php

use Illuminate\Support\Facades\Route;
use Module\User\Http\Controllers\Api\v1\Order\FlightOrderController;

Route::group(['prefix' => 'order'],function (){

    // Select Flight
    Route::middleware('guest')->get('/select-flight',[FlightOrderController::class,'select'])->name('select');

    // User add  Passenger(s)
    Route::middleware('auth:api')->post('/add-passenger',[FlightOrderController::class,'createPassenger'])->name('add-passenger');
});

require __DIR__ . '/auth.php';
