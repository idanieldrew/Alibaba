<?php

namespace Module\User\Http\Controllers\Api\v1\Order;

use App\Http\Controllers\Controller;
use Module\Flight\Entity\Flight;

class FlightOrderController extends Controller
{
    public function select()
    {
        $source = request('source');
        $destination = request('destination');
        $takeoff = request('takeoff');

        $flight = Flight::
                        where('source','like',"%" . $source . "%")
                        ->orWhere('destination','like',"%" . $destination . "%")
                        ->where('takeoff','like',"%" . $takeoff . "%")->paginate();
        return $flight;
    }

    public function createPassenger()
    {
        $passengers = request('passenger');
        $data = [];
        foreach ($passengers as $passenger => $value){
            $data[] = $value;
        }

        $x = auth()->user()->passengers()->createMany($data);
        return $x;
    }
}