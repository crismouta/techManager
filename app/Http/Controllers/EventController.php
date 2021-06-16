<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class EventController extends Controller
{

    public function __construct(){

        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    $events = Event::paginate(5);

    if(Auth::user()->isAdmin){

        return view('admin.index', ['events' => $events]);

    }
    //dd($events);
        return view('user.index', ['events' => $events]);

    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.createAdmin');
        // return view('events.createUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newEvent = request()->except('_token');

         if($request->hasFile('image'))
        {
            $newEvent['image']=$request->file('image')->store('img', 'public');
        }
        Event::insert($newEvent);
        //return response()->json($newEvent);
        $events = Event::paginate(40);

        return view('dashboard', ['events' => $events]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);

        if(Auth::user()->isAdmin){

            return view('admin.show',  ["events" => $event]);

        }

            return view('user.show', ["events" => $event]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */

    //esto servira para el join del user
    public function join($id)

    {
        $event = Event::findOrFail($id);

        return view('events.editUser', compact('event'));
    }

    public function edit($id)

    {
        $event = Event::findOrFail($id);

        return view('events.editAdmin', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $changesEvent = request()->except(['_token', '_method']);

        if($request->hasFile('image'))
            {

            $event=Event::findOrFail($id);
            Storage::delete('public/'.$event->image);
            $newEvent['image']=$request->file('image')->store('img', 'public');


            }


        Event::where('id', '=', $id)->update($changesEvent);

        //$event = Event::findOrFail($id);
        return redirect('dashboard');
        //return view('dashboard', compact('event'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::destroy($id);
        return redirect('dashboard');
    }
}
