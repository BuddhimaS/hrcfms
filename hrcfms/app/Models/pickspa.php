<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pickspa extends Model
{
    protected $fillable = [
        'spa_service',
        'appointment_date',
        'time_slot',
    ];
}
