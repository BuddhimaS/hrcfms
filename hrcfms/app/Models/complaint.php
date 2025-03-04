<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class complaint extends Model
{
    protected $fillable = [
        'complain_type',
        'incident_datetime',
        'attachments',
        'feedback_agreement',
        'guest_id',
    ];

       // Cast attachments to an array
       protected $casts = [
        'attachments' => 'array',
        'feedback_agreement' => 'boolean',
    ];
}
