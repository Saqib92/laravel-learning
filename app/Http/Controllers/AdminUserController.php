<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\AdminUser;
use Validator;

class AdminUserController extends Controller
{
    function index(){
        return view('admin/adminlogin');
    }

    function adminLogin(Request $req){
        $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $userExists = AdminUser::where('email', $req->email)->first();

        if(empty($userExists)){
            return redirect('adminlogin')->withErrors("User Not Exists");
        }
        
        $hashedPassword = $userExists->password;
        $passCheck = Hash::check($req->password, $hashedPassword);

        if($passCheck){
            $req->session()->put('email', $req->email);
            return redirect('/')->withSuccess("Login successfull!");
        }else{
            return redirect('adminlogin')->withErrors("Email or Password is Wrong!!");
        }
    }
}
