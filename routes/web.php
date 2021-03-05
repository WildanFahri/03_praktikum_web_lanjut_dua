<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/products', [HomeController::class, 'products']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/gallery', [HomeController::class, 'gallery']);