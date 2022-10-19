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
        $data['userData'] = Member::find($id);
        return view('edit', $data);
    }

    function saveMember(Request $req){
        $data = Member::find($req->id);
        
        $data->full_name = $req->full_name;
        $data->email = $req->email;
        $data->address = $req->address;
        $data->save();

        return redirect('list');
    }
}
