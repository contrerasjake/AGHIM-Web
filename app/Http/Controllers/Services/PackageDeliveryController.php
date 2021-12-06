<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageDeliveryController extends Controller
{
    public function index(){
        return view('services.package-delivery');
    }
}
