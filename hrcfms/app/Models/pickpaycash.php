<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pickpaycash extends Model
{
    protected $fillable = [
        'payment_option',
        'payment_date',
        'payment_time',
        
    ];
}
