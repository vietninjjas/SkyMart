<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Cart extends Model
{
    protected $primaryKey = 'cart_id';

    protected $fillable = [
        'user_id',
        'cart_note',
    ];

    public function user()
    {
        $this->belongsTo(User::class, 'user_id');
    }
}
