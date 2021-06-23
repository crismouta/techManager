<?php

namespace Tests\Feature\Home;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeListEventTest extends TestCase
{
    //para vaciar base de datos con cada test

    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    public function test_AnyUserCanSeeListOfEvents()
    {
        //GIVEN
        //crear 2 eventos en la base de datos virtual 

        $events = Event::factory(2)->create();
        

        //el usuario no es necesario crearlo porque se trata de cualquier usuario


        //WHEN SUT(system under test)
        //


        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertStatus(200)
                  ->assertViewIs('home.index')
                  ->assertSee($events[0]->title);

     


    }
}
