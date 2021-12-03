<?php

namespace App\Http\Controllers\Profiles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileBooking extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index(){
        return view('profiles.profileBooking');
    }
    
}
