<?php

namespace Database\Seeders;

use App\Models\Airplane;
use App\Models\AirplaneUser;
use App\Models\Flight;
use App\Models\FlightUser;
use App\Models\Hotel;
use App\Models\HotelUser;
use App\Models\User;
use Illuminate\Database\Seeder;

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
            'flight_id' => $filght->flight_number,
            'user_id' => $user->identification_code
        ]);

        // REL PLANE & USER
        AirplaneUser::create([
            'airplane_id' => $plane->code,
            'user_id' =>  $user->identification_code
        ]);

        // REL HOTEL & USER
        HotelUser::create([
            'hotel_id' => $hotel->postal_code,
            'user_id' => $user->identification_code
        ]);

    }
}
