<?php

namespace Module\Cart\tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CartTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_add_shopping_cart()
    {
        $this->login();
    }
}