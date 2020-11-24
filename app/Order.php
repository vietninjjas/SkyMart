<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Order extends Model
{
    protected $primaryKey = 'order_id';

    protected $fillable = [
        'user_id',
        'order_name',
        'order_phone',
        'order_city',
        'order_district',
        'order_ward',
        'order_address',
        'ship_method',
        'pay_method',
        
    ];

    public function user()
    {
        $this->belongsTo(User::class, 'user_id');
    }
    public function checkouts()
    {
        $this->hasMany(Checkout::class, 'order_id');
    }
}
