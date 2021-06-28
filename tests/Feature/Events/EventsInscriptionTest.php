<?php

namespace Tests\Feature\Events;

use App\Models\Event;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class EventsInscriptionTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_NotLoggedUserCannotInsribeInEvent()
    {
        $event = Event::factory()->create();
        
        $response = $this->get(route('join', $event->id));

        $response->assertStatus(302)
                ->assertRedirect('/login');
    }
    
    public function test_AuthUserCanInscribe()
    {
        $user = User::factory()->create();
        $event = Event::factory()->create();
        
        $this->actingAs($user);
      
        // dd($user->events);
        $this->get(route('join', $event->id));

       

        $this->assertEquals($user->id, $event->users[0]->id);

       
    }
}
