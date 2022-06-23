<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;

Route::get('/', [HomeController::class, "index"]);

Route::get('/reservation', [OrderController::class, "index"]);
Route::post('/reservation', [OrderController::class, "store"]);