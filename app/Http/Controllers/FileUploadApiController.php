<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadApiController extends Controller
{
    //
    function UplaodFile(Request $req){
        $resut =  $req->file('file')->store('img');
        return ['result'=> $resut];
    }
}
