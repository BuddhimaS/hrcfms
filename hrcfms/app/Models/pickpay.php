<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pickpay extends Model
{
    protected $fillable = [
        'transaction_reference',
        'transfer_date',
        'additional_details',
        'payment_slip', // To store the file path
    ];

        // Cast attachments to an array
        protected $casts = [
            'attachments' => 'array',
            
        ];
}
