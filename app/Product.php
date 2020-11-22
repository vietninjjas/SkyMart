<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Review;
use App\Wishlist;
use App\Checkout;

class Product extends Model
{
    protected $primaryKey = 'pro_id';

    protected $fillable = [
        'cate_id',
        'pro_name',
        'pro_image',
        'pro_desc',
        'view',
        'quantity',
        'pro_old_price',
        'pro_new_price',
        'pro_sale',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'pro_id');
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class, 'pro_id');
    }

    public function checkouts()
    {
        $this->hasMany(Checkout::class, 'pro_id');
    }
}
