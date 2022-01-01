<?php

use Illuminate\Support\Facades\Route;
use Module\Airplane\Http\Controller\Api\v1\PlaneController;

Route::get('/',[PlaneController::class,'index']);