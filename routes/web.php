<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PriceController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PriceController::class, 'index']);
Route::post('/submit-order', [PriceController::class, 'submitOrder'])->name('submit.order');
