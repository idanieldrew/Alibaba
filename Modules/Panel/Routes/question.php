<?php

use Module\Panel\Http\Controller\Api\v1\Question\CrudController;
use Illuminate\Support\Facades\Route;

// See all question
Route::get('/questions',[CrudController::class,'index'])->name('question.index');

// Create question
Route::post('/create-question',[CrudController::class,'store'])->name('question.store');