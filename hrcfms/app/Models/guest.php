<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class guest extends Model
{
    protected $fillable = [
        'user_id',
        'Fname',
        'Lname',
        'DOB',
        'Email',
        'City',
        //'State',
        'PinCode',
        'country_id',
        'Mobile',
        'Password',
        

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
