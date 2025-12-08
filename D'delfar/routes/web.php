<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SparepartController;

Route::get('/', function () {
    return view('LandingPage');
})->name('landing');

// ================= AUTH =================

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', [RegisterController::class, 'showForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

Route::post('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('landing');
})->name('logout');

// ================= USER =================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::get('/sparepart', function () {
    return view('landing.Sparepart');
})->name('sparepart');

Route::get('/description', function () { 
    return view('landing.Description'); 
})->name('description'); 

Route::get('/sparepart/{id}', 
[SparepartController::class, 'show'])->name('sparepart.show');

Route::get('/service', function () {
    return view('landing.Service');
})->name('service');
