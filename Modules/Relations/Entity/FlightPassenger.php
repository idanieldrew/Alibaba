<?php

namespace Module\Relations\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightUser extends Model
{
    use HasFactory;

    protected $table = 'flight_passenger';
    protected  $guarded = [];
}
