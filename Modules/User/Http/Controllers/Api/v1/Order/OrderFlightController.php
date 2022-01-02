<?php

namespace Module\User\Http\Controllers\Api\v1\Order;

use App\Http\Controllers\Controller;
use Module\Flight\Entity\Flight;

class OrderFlightController extends Controller
{
    public function select()
    {
        $source = request('source');
        $destination = request('destination');
        $takeoff = request('takeoff');

        $flight = Flight::
                        where('source','like',"%" . $source . "%")
                        ->orWhere('destination','like',"%" . $destination . "%")
                        ->where('takeoff','like',"%" . $takeoff . "%")->pagination();
        return $flight;
    }
}