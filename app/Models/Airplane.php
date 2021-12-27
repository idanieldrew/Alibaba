<?php

namespace App\Models;

use App\Models\Concerns\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airplane extends Model
{
    use HasFactory,UsesUuid;

    public function flights()
    {
        return $this->hasMany(Flight::class,'airplanes','flight_number');
    }
}
