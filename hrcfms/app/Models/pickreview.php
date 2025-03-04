<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pickreview extends Model
{
    
    protected $fillable = [
        'booking_number',
        'pin_code',
        'relevant_date',
        'review_topic',
        'review_story',
        'rating',
    ];
}
