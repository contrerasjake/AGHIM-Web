<?php

namespace App\Http\Controllers\Profiles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileAddressController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index(){
        return view('profiles.profileAddress');
    }
    
    public function editAddress(){
        return view('profiles.profileEditAddress');
    }
    
}
