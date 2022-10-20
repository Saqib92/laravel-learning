<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    //
    function operations(){
        return DB::table('members')
        ->where('id', 7)
        ->update([
            'full_name' => 'James Clarke',
            'email' => 'james@gmail.com',
            'address' => 'Ideve'
        ]);
        //return view('querylist', ['data'=>$data]);
    }
}
