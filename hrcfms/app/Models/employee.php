<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable = [
        
        'emp_name',
        'emp_mobile',
        'emp_email',
        'employee_type',
        'emp_password',

    ];
}
 