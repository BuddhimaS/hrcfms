<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pickroom extends Model
{
    protected $fillable = [
        'room_type',
        'checkin_date',
        'checkout_date',
        'adults',
        'children',
        'promo_code',
    ];
}
