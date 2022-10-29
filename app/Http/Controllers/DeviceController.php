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

    function deleteDevice($id){

        $data = Device::find($id);

        if(empty($data)){
            return ['status'=> false, 'message'=>'device not found', 'type'=> $data];
        }
        $res = $data -> delete();
        if($res){
            return ['status'=> true, 'message'=>'device deleted', 'type'=> $res];
        }else{
            return ['status'=> false, 'message'=>'device not delete', 'type'=> $res];
        }
    }

    function searchDevice($name){
        $data = Device::where('name', 'like', '%'.$name."%")->get();
        

        if(!$data->isEmpty()){
            return ['status'=>true, 'data' => $data];
        }{
            return ['status'=>false, 'data' => $data, 'message'=> 'data not found'];
        }
    }
}
