<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SparepartController;

Route::get('/', function () {
    return view('LandingPage');
});


//login
Route::get('/login', function () {
    return view('auth.login');
});

// Jika pakai proses login
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// REGISTER
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [RegisterController::class, 'register'])->name('register.post');


// Dashboard (harus login)
Route::get('/dashboard', function () {
    return "Selamat datang di dashboard!";
})->middleware('auth');


// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/sparepart', function () {
    return view('user.Sparepart');
})->name('sparepart');

Route::get('/description', function () { return view('user.Description'); })->name('description'); Route::get('/sparepart/{id}', [SparepartController::class, 'show'])->name('sparepart.show');

Route::get('/service', function () {
    return view('user.Services');
})->name('service');

Route::get('/bookingservice', function () {
    return view('user.BookingServices');
})->name('bookingservice');