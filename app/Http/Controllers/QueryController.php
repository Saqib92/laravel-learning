<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    //
    function operations(){
        $data = DB::table('members')
        ->where('address', '=' , 'pakistan')
        ->get();
        return view('querylist', ['data'=>$data]);
    }
}
