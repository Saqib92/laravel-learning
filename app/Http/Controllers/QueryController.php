<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    //
    function operations(){
        $data = DB::table('members')
        //->find(3); // to find
        ->where('id', '=' , '1')
        ->get();
        return view('querylist', ['data'=>$data]);
    }
}
