<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller {

    public function index() {

        $events = Event::paginate(5);

        return view('home.index', ['events' => $events]);

    }

    public function show($id) {

        $event = Event::find($id);

        return view('home.show', compact('event'));
    }

}