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



    public function eventSelector()

{

    $event1 = Event::all()[0];
    //dd($event1);

    return view('events.first', ['event1' => $event1]);



}



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
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

        /* if($request->hasFile('photo'))
        {
            $newEvent['photo']=$request->file('photo')->store('uploads', public'); ¡Ojo! Aquí no hay carpeta uploads en store-public
        } */
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
        return view('events.show', compact('event'));
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

        return view('events.edit', compact('event'));
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

        /* if($request->hasFile('photo'))
            {

            $event=Event::findOrFail($id);

            Storage::delete('public/'.$event->photo);

            $newEvent['photo']=$request->file('photo')->store('uploads', public'); ¡Ojo! Aquí no hay carpeta uploads en storage-public

            }
        */

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
