<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testView(): void
    {
        $response = $this->get('/user'); 
        $response->assertStatus(200);
        $response->assertSeeText("hello yudra");

        $response = $this->get('/user-again');
        $response->assertSeeText("hello yudra");
    }
}
