<?php

use Illuminate\Support\Facades\Route;
use Module\Cart\Http\Controller\Api\v1\CartController;

// Store Shopping Cart
Route::middleware('auth:api')->get('/add_to_cart',[CartController::class,'store'])->name('cart.store');