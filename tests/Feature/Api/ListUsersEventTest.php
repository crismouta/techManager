<?php

namespace Tests\Feature\Api;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ListUsersEventTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_CheckIfEventsAreListedInJsonFile()
    {
        $event = Event::factory(2)->create();

        $response = $this->get('/api/events');

        $response->assertStatus(200)
                 ->assertJsonCount(2);
    }

    //crear un evento, dos usuarios
    //asignar los usuarios a evento
    //comprobar que en la ruta del evento figure el id del evento inscrito
}
