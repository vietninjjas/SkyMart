<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Checkout;

class Order extends Model
{
    protected $primaryKey = 'order_id';

    protected $fillable = [
        'pro_id',
    ];

    public function product()
    {
        $this->belongsTo(Product::class, 'pro_id');
    }

    public function checkouts()
    {
        $this->belongsTo(checkout::class, 'order_id');
    }
}
