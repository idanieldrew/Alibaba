<?php

namespace Module\User\Http\Controllers\Api\v1\Order;

use App\Http\Controllers\Controller;
use Module\Flight\Entity\Flight;
use Module\User\Repositories\UserRepository;

class FlightOrderController extends Controller
{
    public function select(UserRepository $repository)
    {
        $source = request('source');
        $destination = request('destination');
        $takeoff = request('takeoff');

        $repository->selectFlight($source,$destination,$takeoff);
    }

    public function createPassenger(UserRepository $repository)
    {
        $passengers = request('passenger');
        $repository->addPassengers($passengers);
    }
}