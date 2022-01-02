<?php

namespace Module\Airplane\Entity;

use App\Models\Concerns\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Module\Airplane\Database\factories\AirplaneFactory;
use Module\Flight\Entity\Flight;

class Airplane extends Model
{
    use HasFactory,UsesUuid;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return AirplaneFactory::new();
    }

    public function flights()
    {
        return $this->hasMany(Flight::class,'airplanes','flight_number');
    }
}
