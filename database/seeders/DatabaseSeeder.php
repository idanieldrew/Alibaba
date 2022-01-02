<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Module\Airplane\Entity\Airplane;
use Module\Flight\Entity\Flight;
use Module\Hotel\Entity\Hotel;
use Module\Relations\Entity\AirplaneUser;
use Module\Relations\Entity\FlightUser;
use Module\Relations\Entity\HotelUser;
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
        $user = User::factory()->create();

        // HOTEL
        $hotel = Hotel::factory()->create();

        // FLIGHT
        $filght = Flight::factory()->create();

        // AIRPLANE
        $plane = Airplane::factory()->create();

        // REL FLIGHT & USER
        FlightUser::create([
            'flight' => $filght->flight_number,
            'user_id' => $user->identification_code
        ]);

        // REL PLANE & USER
        AirplaneUser::create([
            'airplane_id' => $plane->code,
            'user_id' =>  $user->identification_code
        ]);

        // REL HOTEL & USER
        HotelUser::create([
            'postal_code_hotel' => $hotel->postal_code,
            'user_id' => $user->identification_code
        ]);

    }
}
