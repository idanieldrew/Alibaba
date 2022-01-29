<?php

use Illuminate\Support\Facades\Route;
use Module\Panel\Http\Controller\Api\v1\Flight\CrudController;
use Module\Panel\Http\Controller\Api\v1\Question\CrudController as Question;

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

// See all question
Route::get('/questions',[Question::class,'index'])->name('question.index');

// Create question
Route::post('/create-question',[Question::class,'store'])->name('question.store');
