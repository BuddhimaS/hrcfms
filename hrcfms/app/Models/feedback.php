<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    protected $fillable = [
        'overall_experience',
        'room_cleanliness',
        'staff_friendliness',
        'service_quality',
        'recommend',
        'suggestions',
    ];
}
