<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteParemeterOptionalTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testRouteParameterOptional(): void
    {
        $this->get('/users/1234')->assertSeeText("Users : 1234");

        $this->get('/users')->assertSeeText("Users : 404");
    }
}
