<?php

use App\Http\Controllers\FoodsController;
use App\Http\Controllers\RestaurantsController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\CarOwnersController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailsController;
use App\Http\Controllers\PackageDetailsController;
use App\Http\Controllers\TrackingDetailsController;
use App\Http\Controllers\PaymentDetailsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->prefix('v1')->group(function(){
    Route::get('/user', function(Request $request){
        return $request->user();
    });

    //food delivery route
    Route::apiResource('/restaurants', RestaurantsController::class);
    Route::apiResource('/foods', FoodsController::class);
    Route::apiResource('/orders', OrderController::class);
    Route::apiResource('/order-details', OrderDetailsController::class);

    //package delivery route
    Route::apiResource('/package-details', PackageDetailsController::class);
    Route::apiResource('/tracking-details', TrackingDetailsController::class);

    //payment route
    Route::apiResource('/payment-details', PaymentDetailsController::class);
    
    //car rental route
    Route::apiResource('/car_owners', CarOwnersController::class);
    Route::apiResource('/cars', CarsController::class);
});
