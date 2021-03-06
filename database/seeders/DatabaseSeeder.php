<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Module\Airplane\Entity\Airplane;
use Module\Cart\Entity\Cart;
use Module\Cart\Entity\CartItem;
use Module\Contact\Entity\Contact;
use Module\Flight\Entity\Flight;
use Module\Hotel\Entity\Hotel;
use Module\Passenger\Entity\Passenger;
use Module\Question\Entity\Question;
use Module\Relations\Entity\AirplanePassenger;
use Module\Relations\Entity\FlightPassenger;
use Module\Relations\Entity\HotelPassenger;
use Module\Relations\Entity\PassengerUser;
use Module\Ticket\Entity\Ticket;
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

        // Passenger
        $passengers = Passenger::factory()->create();

        // passenger_user
        PassengerUser::create([
            'userId' => $user->id,
            'passengerId' => $passengers->id
        ]);

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

        $ticket = Ticket::factory()->create([
            'type' => false,
            'class' => true
        ]);

        // REL HOTEL & USER
        HotelPassenger::create([
            'postal_code_hotel' => $hotel->postal_code,
            'passenger_id' => $passengers->identification_code
        ]);

        // Question module
        Question::factory()->create();

        // Contact module
        Contact::factory()->create();

        // Cart
        $cart = $user->cart()->save(Cart::factory()->make());

        $cart->cartItems()->save(CartItem::factory()->make([
            'ticket_id' => $ticket->id
        ]));
    }
}
