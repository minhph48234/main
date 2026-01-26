<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'departure_date',
        'adults',
        'children',
        'infants',
        'note',
    ];
}
