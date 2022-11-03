<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Validator;

class LoginController extends Controller
{
    function index(){
        return view('login');
    }

    function loginUser(Request $req){
        $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $userExists = User::where('email', $req->email)->first();

        if(empty($userExists)){
            return redirect('login')->withErrors("User Not Exists");
        }
        
        $hashedPassword = $userExists->password;
        $passCheck = Hash::check($req->password, $hashedPassword);

        if($passCheck){
            $req->session()->put('email', $req->email);
            return redirect('/')->withSuccess("Login successfull!");
        }else{
            return redirect('login')->withErrors("Email or Password is Wrong!!");
        }
    }
}
