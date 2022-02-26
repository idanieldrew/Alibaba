<?php

namespace Module\User\Repositories\v1;

use Module\Flight\Entity\Flight;
use Module\Flight\Http\Resources\v1\FlightResource;
use Module\Panel\Repositories\Repository;
use Module\Passenger\Http\Resources\v1\PassengerCollection;
use Module\User\Entity\User;

class UserRepository extends Repository
{
    public function model()
    {
        return User::class;
    }

    /*
     *  Select flight
     *  Call in Module\User\Http\Controllers\Api\v1\Order
     *  @param  string $source
     * @param string $destination
     * @param  number $takeoff
     * @return \Module\Flight\Http\Resources\v1;\FlightResource
     */
    public function selectFlight($source,$destination,$takeoff)
    {
        $flight = Flight::select($source,$destination,$takeoff)->paginate(10);

        return new FlightResource($flight);
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