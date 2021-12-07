<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\FacebookSocialiteController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Services\FoodDeliveryController;
use App\Http\Controllers\Profiles\ProfileController;
use App\Http\Controllers\Profiles\ProfileAddressController;
use App\Http\Controllers\Profiles\ProfileBooking;

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

Route::group(['middleware' => ['auth']], function() {
    Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify')->middleware(['signed']);
    Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
});

//only authenticated can access this group
Route::group(['middleware' => ['auth']], function() {
    //only verified account can access with this group
    Route::group(['middleware' => ['verified']], function() {
        Route::get('/food_delivery', [FoodDeliveryController::class, 'index'])->name('food_delivery.index');
    });
});
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile/edit', [ProfileController::class, 'editProfile'])->name('profile/edit');
Route::get('/profile/address', [ProfileAddressController::class, 'index'])->name('address');
Route::get('/profile/address/edit', [ProfileAddressController::class, 'editAddress'])->name('address/edit');
Route::get('/profile/book', [ProfileBooking::class, 'index'])->name('book');
