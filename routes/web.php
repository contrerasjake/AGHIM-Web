<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\FacebookSocialiteController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Services\food_delivery\FoodDeliveryController;
use App\Http\Controllers\Services\food_delivery\BrowseRestaurantController;
use App\Http\Controllers\Services\food_delivery\RestaurantMenuController;
use App\Http\Controllers\Services\food_delivery\OrderCartController;
use App\Http\Controllers\Services\food_delivery\OrderReviewController;
use App\Http\Controllers\Services\OrderCheckoutController;
use App\Http\Controllers\Services\package_delivery\Package_formReviewController;
use App\Http\Controllers\Services\package_delivery\Package_formController;
use App\Http\Controllers\Services\package_delivery\Package_TrackingController;
use App\Http\Controllers\Services\package_delivery\PackageDeliveryController;
use App\Http\Controllers\Profiles\ProfileController;
use App\Http\Controllers\Profiles\ProfileAddressController;
use App\Http\Controllers\Profiles\ProfileBooking;
use App\Http\Controllers\Services\car_rental\CarRentalController;


Route::get('/', function(){
    return view('home');
})->name('home');

//auth
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
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
Route::group(['middleware' => ['auth']], function() {
    Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify')->middleware(['signed']);
    Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
});
Route::get('/logout', [LogoutController::class, 'store'])->name ('logout');

//only authenticated can access this group
Route::group(['middleware' => ['auth']], function() {
    //only verified account can access with this group
    Route::group(['middleware' => ['verified']], function() {
        Route::get('/food_delivery', [FoodDeliveryController::class, 'index'])->name('food_delivery.index');
        Route::get('/food_delivery/browse_restaurant', [BrowseRestaurantController::class, 'index'])->name('browse_restaurant');
        Route::get('/food_delivery/browse_restaurant/restaurant_menu', [RestaurantMenuController::class, 'index'])->name('restaurant_menu');
        Route::get('/food_delivery/order_cart', [OrderCartController::class, 'index'])->name('order_cart');
        Route::get('/food_delivery/order_cart/order_review', [OrderReviewController::class, 'index'])->name('order_review');
        Route::get('/order_checkout', [OrderCheckoutController::class, 'index'])->name('order_checkout');



        //package delivery
        Route::get('/package_delivery', [PackageDeliveryController::class, 'index'])->name('package_delivery.index');
        Route::get('/package_delivery/form', [Package_formController::class, 'index'])->name('package_form.index');
        Route::get('/package_delivery/form-review', [Package_formReviewController::class, 'index'])->name('package_formReview.index');
        Route::get('/package_delivery/tracking', [Package_TrackingController::class, 'index'])->name('package_tracking.index');

        //Car Rental
        Route::get('/car_rental', [CarRentalController::class, 'index'])->name('car_rental.index');
    });
});


Route::prefix('profile')->group( function(){
    Route::get('', [ProfileController::class, 'index'])->name('profile');
    Route::get('edit', [ProfileController::class, 'editProfile'])->name('profile/edit');
    Route::post('edit', [ProfileController::class, 'saveProfile'])->name('save-profile');
    Route::get('address', [ProfileAddressController::class, 'index'])->name('address');
    Route::get('book', [ProfileBooking::class, 'index'])->name('book');
    Route::get('address/edit', [ProfileAddressController::class, 'editAddress'])->name('address/edit');
});
