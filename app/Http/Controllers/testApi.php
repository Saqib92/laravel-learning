<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testApi extends Controller
{
    function getData(){
        return ['name'=>'asdf', 'abcd'=>'def'];
    }
}
