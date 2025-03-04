<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pickspas extends Model
{
    protected $fillable = [
        'spa_service',
        'appointment_date',
        'time_slot',
    ];
}
