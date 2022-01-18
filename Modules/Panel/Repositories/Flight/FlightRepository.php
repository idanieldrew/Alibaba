<?php

namespace Module\Panel\Repositories\Flight;

use Module\Flight\Entity\Flight;

class FlightRepository
{
    public function create($request)
    {
        $flight = Flight::create([
            'flight_number' => $request->flight_number,
            'landing' => $request->landing,
            'takeoff' => $request->takeoff,
            'source' => $request->source,
            'destination' => $request->destination,
            'passengers' => $request->passengers,
        ]);

        return $flight;
    }

    public function update($request)
    {
        $flight = Flight::update([
            'flight_number' => $request->flight_number,
            'landing' => $request->landing,
            'takeoff' => $request->takeoff,
            'source' => $request->source,
            'destination' => $request->destination,
            'passengers' => $request->passengers,
        ]);

        return $flight;
    }
}