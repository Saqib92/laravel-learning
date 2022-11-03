<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Validator;

class SignupController extends Controller
{
    function index() {
        return view('signup');
    }

    function registerUser(Request $req){
        $req->validate([
            'full_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone_no' => 'required',
            'address' => 'required',
        ]);

        $userExists = User::where('email', $req->email)->first();

        if(!empty($userExists)){
            return redirect('signup')->withErrors("Email Already Taken!!");
        }
        
        $user = new User;
        $user->full_name = $req->full_name;
        $user->email = $req->email;        
        $hashedPassword = Hash::make($req->password);
        $user->password = $hashedPassword;
        $user->phone_no = $req->phone_no;
        $user->address = $req->address;
        $res = $user-> save();

        if($res){
            return redirect('signup')->withSuccess("Retailer successfully added");
        }else{
            return redirect('signup')->withErrors("Unsupported media format");
        }
    }
}
