<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class cart extends Model
{
    use HasFactory;

    public static function getcartItemWithProduct($userId){
        $cartItems = self::select('*')
        ->leftjoin('products', 'products.id', 'carts.product_id')
        ->where('carts.user_id', $userId)
        ->get();

        return $cartItems;
    }
}
