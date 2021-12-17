<?php

namespace App\Http\Controllers\Services\package_delivery;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageDeliveryController extends Controller
{
    public function index(){
        return view('services.package delivery.package-delivery');
    }
}
