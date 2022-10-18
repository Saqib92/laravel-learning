<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class AddmemberController extends Controller
{
    //
    function addData(Request $req){

        $member = new Member;
        $member->full_name = $req->full_name;
        $member->email = $req->email;
        $member->address = $req->address;

        $member-> save();
        return redirect('addmember');
    }
}
