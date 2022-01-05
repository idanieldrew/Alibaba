<?php

namespace Module\User\Repositories;

use Module\Flight\Entity\Flight;

class UserRepository
{
    public function selectFlight($source,$destination,$takeoff)
    {
        $flight = Flight::
        where('source','like',"%" . $source . "%")
            ->orWhere('destination','like',"%" . $destination . "%")
            ->where('takeoff','like',"%" . $takeoff . "%")->paginate();
        return $flight;
    }

    public function addPassengers($passengers)
    {
        $data = [];
        foreach ($passengers as $passenger => $value){
            $data[] = $value;
        }

        $x = auth()->user()->passengers()->createMany($data);
        return $x;
    }
}