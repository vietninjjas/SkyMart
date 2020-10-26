<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cart;
use App\Order;

class Checkout extends Model
{
    protected $fillable = [
        'cart_id',
        'order_id',
        'check_status',
        'total_price',
        'payment',
    ];

    public function cart()
    {
        $this->belongsTo(Cart::class, 'cart_id');
    }

    public function order()
    {
        $this->belongsTo(Order::class, 'order_id');
    }
}
