<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Feedback extends Model
{
    protected $primaryKey = 'fed_id';

    protected $fillable = [
        'user_id',
        'content',
    ];

    public function user()
    {
        $this->belongsTo(User::class, 'user_id');
    }
}
