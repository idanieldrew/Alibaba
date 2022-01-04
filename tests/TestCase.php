<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Module\User\Entity\User;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function login()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
    }
}
