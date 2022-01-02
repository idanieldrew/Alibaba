<?php

namespace Module\Relations\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirplaneUser extends Model
{
    use HasFactory;

    protected $table = 'airplane_passenger';
    protected  $guarded = [];
}
