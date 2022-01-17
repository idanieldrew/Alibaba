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
    public function show_flights()
    {
        $flights = Flight::factory()->create();

        $this->get(route('flight.index'));
    }

}