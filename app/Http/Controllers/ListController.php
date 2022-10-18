<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class ListController extends Controller
{
    //
    function show(){
        $data = Member::all();

        return  view('list', ['memberList'=>$data]);
    }

    function delete($id){
        $delete_data = Member::find($id);
        $delete_data->delete();
        return redirect('list');
    }

    function edit($id){
        return $id;
    }
}
