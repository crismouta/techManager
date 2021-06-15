<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    $events = Event::paginate(5);
    //dd($events);

    return view('dashboard', ['events' => $events]);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('events.createUser');
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
        $event = Event::findOrFail($id);
<<<<<<< HEAD
        return view('events.showAdmin', compact('event'));
=======
        return view('events.showUser', compact('event'));
>>>>>>> 30e904341971c361782a650ab3cdac103870172d
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $event = Event::findOrFail($id);

        return view('events.editUser', compact('event'));
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
