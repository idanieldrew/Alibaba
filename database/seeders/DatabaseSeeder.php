<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Module\Airplane\Entity\Airplane;
use Module\Flight\Entity\Flight;
use Module\Hotel\Entity\Hotel;
use Module\Passenger\Entity\Passenger;
use Module\Relations\Entity\AirplanePassenger;
use Module\Relations\Entity\FlightPassenger;
use Module\Relations\Entity\HotelPassenger;
use Module\User\Entity\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // USER
        User::factory()->create();

        $passengers = Passenger::factory()->create();

        // HOTEL
        $hotel = Hotel::factory()->create();

        // FLIGHT
        $filght = Flight::factory()->create();

        // AIRPLANE
        $plane = Airplane::factory()->create();

        // REL FLIGHT & USER
        FlightPassenger::create([
            'flight' => $filght->flight_number,
            'passenger_id' => $passengers->identification_code
        ]);

        // REL PLANE & USER
        AirplanePassenger::create([
            'airplane_id' => $plane->code,
            'passenger_id' =>  $passengers->identification_code
        ]);

        // REL HOTEL & USER
        HotelPassenger::create([
            'postal_code_hotel' => $hotel->postal_code,
            'passenger_id' => $passengers->identification_code
        ]);
    }
}
