<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class roomreservation extends Model
{
    protected $fillable = [
        'checkin_date',
        'checkout_date',
        'adults',
        'children',
        'promo_code',
    ];

     /**
     * Define relationship with Room model.
     */
    public function room()
    {
        return $this->belongsTo(Room::class, 'room_number', 'room_number');
    }
}
