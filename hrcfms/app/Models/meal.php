<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class meal extends Model
{
    protected $fillable = [
        'meal_type',
        'count',
        'reservation_date',
    ];
}
