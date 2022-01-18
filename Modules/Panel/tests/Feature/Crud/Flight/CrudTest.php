<?php

namespace Module\Panel\tests\Feature\Crud\Flight;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Module\Flight\Entity\Flight;
use Tests\TestCase;

class CrudTest extends TestCase
{
    use RefreshDatabase,WithFaker;
    
    /** @test */
    public function admin_can_see_all_flights()
    {
        $firstFlight = Flight::factory()->create();
        $secondFlight = Flight::factory()->create();

        $this->get(route('flight.index'))
            ->assertSee($firstFlight->flight_number)
            ->assertSee($secondFlight->flight_number);
    }

    /** @test */
    public function admin_can_see_single_flight()
    {
        $flight = Flight::factory()->create();

        $this->get(route('flight.show'))
            ->assertSee($flight->flight_number);
    }

    /** @test */
    public function admin_can_create_flight()
    {
        $flight = Flight::factory()->make();

        $this->post(route('flight.store'),$flight->toArray());

        $count = Flight::all()->count();

        $this->assertEquals(1,$count);
    }

    /** @test */
    public function admin_can_update_flight()
    {
        $flight = Flight::factory()->create();

        $new = [
            $flight->flight_number = 123
        ];

        $this->post(route('flight.update'),$new);

        $this->assertEquals(123,$flight->flight_number);
    }

    /** @test */
  /*  public function a_flight_requires_a_flight_number()
    {
        $flight = Flight::factory()->make(['flight_number' => null]);

        $this->post(route('flight.store'),$flight->toArray())
            ->assertSessionHasErrors('flight_number');
    }*/
}