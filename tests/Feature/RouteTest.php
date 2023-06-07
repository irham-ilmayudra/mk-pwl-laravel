<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testRoute(): void
    {
        $response = $this->get('/pwl');
        $response->assertStatus(200);
        $response->assertSeeText("hello student");
    }
}

