<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->post('/api/games',['name' => 'Poo','price' => 100]);


        $response->assertStatus(201);
        $response->assertHeader('Content-Type', 'application/json');



    }



}
