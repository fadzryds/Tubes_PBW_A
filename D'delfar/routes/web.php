<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('LandingPage');
});

Route::get('/sparepart', function () {
    return view('user.Sparepart');
})->name('sparepart');