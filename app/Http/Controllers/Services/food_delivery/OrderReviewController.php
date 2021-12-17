<?php

namespace App\Http\Controllers\Services\food_delivery;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderReviewController extends Controller
{
    public function index(){
        return view('services.food delivery.order-review');
    }
}
