<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestaurantMenuController extends Controller
{
    public function index(){
        return view('services.restaurant-menu');
    }
}
