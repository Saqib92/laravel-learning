<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use App\Models\Product;

class CartController extends Controller
{

    function addToCart(Request $req){

        if(!session()->has('email') || session()->get('is_admin') == true){
            return ['status'=> false, 'message'=> 'Login to continue'];
        }
        $userId = User::select('id')->where('email', session()->get('email'))->first()->id;

        $proExists = Cart::where(['user_id' => $userId, 'product_id'=> $req->product_id])->first();

        if($proExists){
            return ['status'=> false, 'message'=>'Product Already Added to cart!'];
        }

        $cart = new Cart;
        $cart->product_id = $req->product_id;
        $cart->qty = $req->qty;
        $cart->user_id = $userId;
        $res = $cart-> save();

        if($res){
            return ['status'=> true, 'message'=>'Product saved to cart'];
        }else{
            return ['status'=> false, 'message'=>'somethign went wrong', ];
        }



    }

    function getCartItems(){
        $userId = User::select('id')->where('email', session()->get('email'))->first()->id;
        $cartItems = Cart::getcartItemWithProduct($userId);
        return  view('cart', ['cartItems'=> $cartItems, 'userId'=> $userId]);        
    }
}
