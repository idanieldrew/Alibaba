<?php

use Illuminate\Support\Facades\Route;
use Module\Panel\Http\Controller\Api\v1\Flight\CrudController;

/*** Flight ***/

// All flights
Route::get('/flights',[CrudController::class,'index'])->name('flight.index');

// single flight
Route::get('/flight',[CrudController::class,'show'])->name('flight.show');

// Create new flight
Route::post('/create-flight',[CrudController::class,'store'])->name('flight.store');

// Update flight
Route::put('/flights',[CrudController::class,'update'])->name('flight.update');

/*** End Flight ***/

/*** Question ***/

Route::get('/questions',[\Module\Panel\Http\Controller\Api\v1\Question\CrudController::class,'index'])->name('question.index');
