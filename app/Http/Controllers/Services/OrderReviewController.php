<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderReviewController extends Controller
{
    public function index(){
        return view('services.order-review');
    }
}
