<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function loadView(Request $req){

        
        return $req-> input();

    }
}
