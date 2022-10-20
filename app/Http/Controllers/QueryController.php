<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    //
    function operations(){
        $data = DB::table('members')
        ->insert([
            'full_name' => 'Najam us Saqib',
            'email' => 'najam@gmail.com',
            'address'=> 'Mars'
        ]);
        return view('querylist', ['data'=>$data]);
    }
}
