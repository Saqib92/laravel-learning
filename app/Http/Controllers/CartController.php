<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;

class CartController extends Controller
{
    function addToCart(Request $req){

        if(!session()->has('email') || session()->get('is_admin') == true){
            return ['status'=> false, 'message'=> 'Login to continue'];
        }
        $userId = User::select('id')->where('email', session()->get('email'))->first()->id;

        $cart = new Cart;
        $cart->product_id = $req->product_id;
        $cart->user_id = $userId;
        $res = $cart-> save();

        if($res){
            return ['status'=> true, 'message'=>'Product saved to cart'];
        }else{
            return ['status'=> false, 'message'=>'somethign went wrong', ];
        }



    }
}
