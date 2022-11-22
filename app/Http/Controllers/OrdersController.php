<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Cart;
use App\Models\Product;
use App\Models\order_item;

class OrdersController extends Controller
{
 
    function checkOut(Request $req){

        $carts = Cart::where('user_id', $req->user_id)->get();

        $total = 0;
        foreach($carts as $cart){
            $product = Product::where('id', $cart->product_id)->first();
            $total += $product['product_price'] * $cart['qty'];
        }

        $order = new Orders;
        $order->user_id = $req->user_id;
        $order->total = $total;
        if($order-> save()){
            foreach($carts as $cart){
                $product = Product::where('id', $cart->product_id)->first();
                $orderItem = new order_item;
                $orderItem->order_id = $order->id;
                $orderItem->produc_id = $cart->product_id;
                $orderItem->total = $product['product_price'] * $cart['qty'];
                $orderItem->qty = $cart['qty']; 
                $orderItem->save();

                $Ecarts = Cart::where('id', $cart->id)->delete();
            }
            
            return ['status'=> true, 'message'=>'Order Successfull!'];
        }else{
            return ['status'=> false, 'message'=>'somethign went wrong', ];
        }

    }
}
