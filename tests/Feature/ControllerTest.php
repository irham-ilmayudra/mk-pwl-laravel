<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testController(): void
    {
        $response = $this->get('/controller/hello')->assertSeeText("hello controller");
        $response->assertStatus(200);
    }
}
