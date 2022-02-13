<?php

namespace Module\User\Repositories\v1;

use Module\Flight\Entity\Flight;
use Module\Passenger\Http\Resources\v1\PassengerCollection;

class UserRepository
{
    /*
     *  Select flight
     *  Call in Module\User\Http\Controllers\Api\v1\Order
     */
    public function selectFlight($source,$destination,$takeoff)
    {
        $flight = Flight::
            where('source',$source)
            ->orWhere('destination',$destination)
            ->where('takeoff',$takeoff)->paginate();

        return $flight;
    }

    public function addPassengers($passengers)
    {
        $data = [];
        foreach ($passengers as $passenger => $value){
            $data[] = $value;
        }

        auth()->user()->passengers()->createMany($data);

        return new PassengerCollection($passengers);
    }
}