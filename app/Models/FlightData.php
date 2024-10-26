<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightData extends Model
{
    use HasFactory;

    protected $fillable = ['flight_time', 'pesticide_liters', 'number_of_flights'];
}
