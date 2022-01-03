<?php

namespace Module\Relations\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassengerUser extends Model
{
    use HasFactory;

    protected $table = 'passenger_user';
    protected  $guarded = [];
}
