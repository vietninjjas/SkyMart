<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    protected $primaryKey = 'cate_id';

    protected $fillable = [
        'cate_name',
        'cate_desc',
        'cate_logo',
        'parent_id',
    ];

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    
    public function parent()
    {
        return $this->belongsTo(Category::class);
    }

    public function products()
    {
        $this->hasMany(Product::class, 'cate_id');
    }
}
