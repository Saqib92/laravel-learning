<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileuploadController extends Controller
{
    //
    function index(Request $req){
        
        $file = $req->file('myFile');
        $path = $file->move('uploads', Date('Y-m-d-s').'.'.$file->getClientOriginalExtension());

        return $path;
    }
}
