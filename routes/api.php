<?php

use App\Http\Controllers\FoodsController;
use App\Http\Controllers\RestaurantsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailsController;
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

    Route::apiResource('/restaurants', RestaurantsController::class);
    Route::apiResource('/foods', FoodsController::class);
    Route::apiResource('/payment-details', PaymentDetailsController::class);
    Route::apiResource('/order-details', OrderDetailsController::class);
    Route::apiResource('/orders', OrderController::class);
});
