<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Orders;
use App\Models\order_item;

class adminorderController extends Controller
{
    //

    function index(){
        $orders = Orders::getUserOrder();
        //dd($orders);
        return view('admin/orders', ['orders'=> $orders]);
    }
}
