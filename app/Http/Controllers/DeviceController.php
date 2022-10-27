<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    function getList($id = null){

        return $id ? Device::find($id) : Device::all();
    }

    function saveDevice(Request $req){

        $data = new Device;

        $data->name = $req->name;
        $data->make = $req->make;
        $res = $data->save();

        if($res){
            return ['status'=> true, 'message'=>'device saved', 'type'=> $res];
        }
    }
}
