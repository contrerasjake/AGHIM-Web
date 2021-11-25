<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\FacebookSocialiteController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Profiles\ProfileController;
use App\Http\Controllers\Profiles\ProfileAddressController;

Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/logout', [LogoutController::class, 'store'])->name ('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::prefix('google')->name('google.')->group( function(){
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
});

Route::prefix('facebook')->name('facebook.')->group( function(){
    Route::get('login', [FacebookSocialiteController::class, 'redirectToFB'])->name('login');
    Route::get('callback', [FacebookSocialiteController::class, 'handleCallback'])->name('callback');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::get('/profile/address', [ProfileAddressController::class, 'index'])->name('address');