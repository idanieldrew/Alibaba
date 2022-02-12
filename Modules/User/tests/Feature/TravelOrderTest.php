<?php

namespace Module\User\tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Module\Flight\Entity\Flight;
use Module\Passenger\Entity\Passenger;
use Module\Relations\Entity\PassengerUser;
use Tests\TestCase;

class TravelOrderTest extends TestCase
{
    use RefreshDatabase,WithFaker;

    public function addFlight()
    {
        $flight = Flight::factory()->create();

        $this->get(route('select'),['source' => $flight->source,'destination' => $flight->destination]);

        return $flight;
    }

    /** @test */
    public function travel_selection()
    {
        $this->assertCount(1,array($this->addFlight()));
    }

    /** @test */
    public function user_can_add_passenger_for_travel()
    {
        // login
        $this->login();

        // add flight and select them
        $this->addFlight();

        $passenger = Passenger::factory()->make();

        $this->post(route('add-passenger'), [
            'passenger' => [
                $passenger->attributesToArray()
            ]
        ]);

        $this->assertDatabaseHas('passengers', [
            'firstName' => $passenger->firstName
        ]);

        $this->assertDatabaseHas('passenger_user',[
            'userId' => auth()->user()->id
        ]);
    }

    /** @test */
    public function user_can_add_passengers_for_travel()
    {
        // login
        $this->login();
        // add flight and select them
        $this->addFlight();

         $firstPassenger = Passenger::factory()->make();
         $secondPassenger = Passenger::factory()->make();

        $this->post(route('add-passenger'), [
            'passenger' => [
                $firstPassenger->attributesToArray(),
                $secondPassenger->attributesToArray()
            ]
        ]);

        $this->assertDatabaseHas('passengers', [
            'firstName' => $firstPassenger->firstName,
        ]);

        $this->assertDatabaseHas('passengers', [
            'lastName' => $secondPassenger->lastName
        ]);

        $this->assertDatabaseHas('passenger_user',[
            'userId' => auth()->user()->id,
        ]);
    }
}
