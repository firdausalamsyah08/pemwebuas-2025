<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    // app/Models/Booking.php
protected $fillable = [
    'name', 'email', 'service', 'service_date', 'request'
];

}
