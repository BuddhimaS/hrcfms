<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $fillable = [
        'room_number', 
        'task_type', 
        'priority', 
        'description', 
        'status'
        

    ];

}
