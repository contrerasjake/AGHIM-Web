<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodDeliveryController extends Controller
{
    public function index(){
        return view('services.food-delivery');
    }
}
