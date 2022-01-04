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

    /** @test */
    public function travel_selection()
    {
        $flight = Flight::factory()->create();

        $this->get(route('select'),['source' => $flight->source,'destination' => $flight->destination]);

        $this->assertCount(1,array($flight));
    }

    /** @test */
    public function add_passenger_for_travel()
    {
        $this->withoutExceptionHandling();
        $flight = Flight::factory()->create();

        $this->get(route('select'),['source' => $flight->source,'destination' => $flight->destination]);

        $this->login();
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
}
