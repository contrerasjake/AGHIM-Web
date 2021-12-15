<?php

namespace App\Http\Controllers\Profiles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index(){
        return view('profiles.profile');
    }
    
    public function editProfile(){
        return view('profiles.profileEditProfile');
    }
    
    public function saveProfile(Request $request){
        $current_user = Auth::user();
        //validate
        $rules = [];
            $rules['name'] = 'required|min:8|max:255';
            $rules['username'] = 'max:255';
        if ($request->get('email') != $current_user->email) {
            $rules['email'] = 'required|email|unique:users|max:255';
        }
            $rules['contact_number'] = 'numeric|regex:/(09)[0-9]{9}/|digits:11';
            $rules['date_of_birth'] = 'nullable|before:today';
        $this->validate($request, $rules);
        
        //store
        $current_user->name = $request->get('name');
        $current_user->username = $request->get('username');
        $current_user->email = $request->get('email');
        $current_user->contact_number = $request->get('contact_number');
        $current_user->date_of_birth = $request->get('date_of_birth');
        $current_user->gender = $request->get('gender');

        $current_user->update();
        return redirect()->route('profile/edit');
    }
}
