<?php

use Illuminate\Support\Facades\Route;
use Module\Panel\Http\Controller\Api\v1\Contact\CrudController;

// Contact
Route::get('/index',[CrudController::class,'index'])->name('contact.index');

// Store
Route::post('/store',[CrudController::class,'store'])->name('contact.store');

// Update
Route::put('/update',[CrudController::class,'update'])->name('contact.update');