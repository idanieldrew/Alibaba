<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirplaneUser extends Model
{
    use HasFactory;

    protected $table = 'airplane_user';
    protected  $guarded = [];
}
