<?php

use Illuminate\Support\Facades\Route;
use Module\Panel\Http\Controller\Api\v1\Flight\CrudController;

// All flights
Route::get('/flights',[CrudController::class,'index'])->name('flight.index');

// single flight
Route::get('/flight',[CrudController::class,'show']);

// Create new flight
Route::post('/create-flight',[CrudController::class,'store']);

// Update flight
Route::put('/flights',[CrudController::class,'update']);

