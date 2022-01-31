<?php

// All questions
use Illuminate\Support\Facades\Route;
use Module\Question\Http\Controllers\Api\v1\QuestionController;

Route::get('/questions',[QuestionController::class,'index'])->name('questions');

