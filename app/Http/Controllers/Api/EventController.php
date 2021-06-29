<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        return response()->json(Event::all(), 200);
    }

    public function subscribed($id){

        $event = Event::findOrFail($id);
        $subscribers = $event->users;

        
        return response()->json($subscribers, 200);
    }
}
