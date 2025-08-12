<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('home');
});
Route::get('/second', function () {
    return view('second');
});
