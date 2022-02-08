<?php

namespace Module\Panel\tests\Feature\Crud\Contact;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Module\Contact\Entity\Contact;
use Tests\TestCase;

class CrudTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function see_information()
    {
        $this->withoutExceptionHandling();
        $info = Contact::factory()->create();

        $this->get(route('contact.index'))
            ->assertSee($info->phone);
    }
}