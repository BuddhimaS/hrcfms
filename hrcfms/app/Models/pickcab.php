<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pickcab extends Model
{
     
    protected $fillable = [
        'reservation_id',
        'pickup_date',
        'pickup_time',
        'vehicle_type',
        'drop_destination',
        'distance',
    ];
}
