<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;



    public static function getUserOrder(){
        $orders = self::select('*', 'orders.created_at as created_at','orders.id as id')
        ->leftjoin('users', 'users.id', 'orders.user_id')
        ->get();
        return $orders;
    }
}
