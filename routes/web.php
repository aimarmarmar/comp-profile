<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('app');
});

Route::get('franchise', function () {
    return view('franchise');
});

Route::get('product', function () {
    return view('product');
});

Route::get('contact', function () {
    return view('contact');
});

Route::post('/send-message', [ContactController::class, 'sendMessage']);
