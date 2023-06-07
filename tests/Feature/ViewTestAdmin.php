<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTestAdmin extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testViewAdmin(): void
    {
        $response = $this->get('/admin');
        $response->assertStatus(200);
        $response->assertSeeText("hello admin");

        $response = $this->get('/admin-again');
        $response->assertSeeText("hello admin");
    }
}
