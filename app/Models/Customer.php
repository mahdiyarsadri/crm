<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'first_name',
        'email',
        'last_name',
        'father_name',
        'national_code',
        'national_number',
        'date',
        'phone_number',
        'mobile_number',
        'gender',
        'education',
        'password',
        'image',
        'State',
        'city',
        'post_number',
        'Address',

    ];
}
