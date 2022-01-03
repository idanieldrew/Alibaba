<?php

namespace Module\Relations\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelPassenger extends Model
{
    use HasFactory;

    protected $table = 'hotel_passenger';
    protected  $guarded = [];
}
