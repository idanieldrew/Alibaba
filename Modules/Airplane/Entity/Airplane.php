<?php

namespace Module\Airplane\Entity;

use App\Models\Concerns\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Module\Flight\Entity\Flight;

class Airplane extends Model
{
    use HasFactory,UsesUuid;

    public function flights()
    {
        return $this->hasMany(Flight::class,'airplanes','flight_number');
    }
}
