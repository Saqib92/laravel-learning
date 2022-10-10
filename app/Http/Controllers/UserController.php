<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function loadView(){

        $data = [
            'Saqib Khan',
            'Haseeb Hanif',
            'Fahad Aslam',
            'Github'
        ];
        return view('users', ['name' => 'Saqib Khan']);

    }
}
