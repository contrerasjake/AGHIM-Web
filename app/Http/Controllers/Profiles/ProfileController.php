<?php

namespace App\Http\Controllers\Profiles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index(){
        return view('profiles.profile');
    }
    
}
