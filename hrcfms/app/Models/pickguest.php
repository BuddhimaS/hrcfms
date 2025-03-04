<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pickguest extends Model
{
    protected $fillable = [
        'title',
        'first_name',
        'last_name',
        'country',
        'mobile_number',
        'email',
        'confirm_email',
        'special_request',
        'arrival_time',
    ];
}
