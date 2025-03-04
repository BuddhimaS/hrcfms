<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    protected $fillable = [
        'room_number',
        'room_type',
        'bed_type',
        'price_per_night',
        'room_description',
        'status',
    ];
}
