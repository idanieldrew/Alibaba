<?php

namespace Module\Flight\Entity;

use App\Models\Concerns\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Module\Airplane\Entity\Airplane;
use Module\Flight\Database\factories\FlightFactory;
use Module\Passenger\Entity\Passenger;

class Flight extends Model
{
    use HasFactory,UsesUuid;

    protected  $guarded = [];

    /**
     * Create a new factories instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return FlightFactory::new();
    }


    /**
     * Scope a query to select flight
     *
     * @param  string $source
     * @param string $destination
     * @param  number $takeoff
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSelect($query,$source,$destination,$takeoff)
    {
        return $query->where('source',$source)
                ->orWhere('destination',$destination)
                ->where('takeoff',$takeoff);
    }

    /* Start Relations */
    public function airplane()
    {
        return $this->belongsTo(Airplane::class,'flights','code');
    }

    public function passengers()
    {
        return $this->belongsToMany(Passenger::class,'flights','identification_code');
    }
    /* End Relations */

}