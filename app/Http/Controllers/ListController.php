<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class ListController extends Controller
{
    //
    function show(){
        $data = Member::all();

        return  view('list', ['memberList'=>$data]);
    }
}
