<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    function loginPost(Request $req){
        $data = $req->input('email');
        $req->session()->put('email', $data);
        return redirect('profile');
    }
}
