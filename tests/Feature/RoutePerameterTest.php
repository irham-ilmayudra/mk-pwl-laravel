<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutePerameterTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testRouteParameter(): void
    {
        $response = $this->get('/products/1');
        $response->assertStatus(200);
        $response->assertSeeText("Products : 1");

        $response = $this->get("products/1/items/xxx");
        $response->assertSeeText("Products : 1, Items : xxx");
    }
}

