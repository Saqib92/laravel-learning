<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    //
    function operations(){
        return DB::table('members')
        ->where('id', 8)
        ->delete();
        //return view('querylist', ['data'=>$data]);
    }
}
