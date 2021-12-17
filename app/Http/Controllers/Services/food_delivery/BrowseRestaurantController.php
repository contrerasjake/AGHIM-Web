<?php

namespace App\Http\Controllers\Services\food_delivery;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrowseRestaurantController extends Controller
{
    public function index(){
        return view('services.food delivery.browse-restaurant');
    }
}
