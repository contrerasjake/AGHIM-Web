<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Package_TrackingController extends Controller
{
    public function index(){
        return view('services.package-delivery_tracking');
    }
}
