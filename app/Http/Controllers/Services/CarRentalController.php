<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarRentalController extends Controller
{
    public function index(){
        return view('services.car-rental');
    }
}