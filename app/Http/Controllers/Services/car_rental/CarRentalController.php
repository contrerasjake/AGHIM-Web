<?php

namespace App\Http\Controllers\Services\car_rental;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarRentalController extends Controller
{
    public function index(){
        return view('services.car rental.car-rental');
    }
}