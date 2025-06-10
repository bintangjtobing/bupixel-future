<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuoteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/quote', [QuoteController::class, 'submit'])->name('quote.submit');
Route::post('/subscribe', [HomeController::class, 'subscribe'])->name('subscribe');
