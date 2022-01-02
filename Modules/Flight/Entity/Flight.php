<?php

namespace Module\Flight\Entity;

use App\Models\Concerns\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Module\Airplane\Entity\Airplane;
use Module\Flight\Database\factories\FlightFactory;
use Module\User\Entity\User;

class Flight extends Model
{
    use HasFactory,UsesUuid;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return FlightFactory::new();
    }

    public function airplane()
    {
        return $this->belongsTo(Airplane::class,'flights','code');
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'flights','identification_code');
    }
}