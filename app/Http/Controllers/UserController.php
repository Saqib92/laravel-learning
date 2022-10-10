<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function loadView($user){

        return view('users', ['name' => $user]);

    }
}
