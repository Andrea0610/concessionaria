<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

//Route::get('/about', [PageController::class, 'about']);

//Route::get('/staffb', [PageController::class, 'staff']);

Route::get('about', [TestController::class, 'about']);




