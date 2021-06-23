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

    $user = Auth::user();

    $events = Event::paginate(5);

    if($user->isAdmin){

        return view('admin.index', ['events' => $events, 'user' => $user]);

    }
    //dd($events);
        return view('user.index', ['events' => $events, 'user' => $user]);

    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
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

        return redirect()->route('logged_index');
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

            return view('admin.show',  ["event" => $event]);

        }

            return view('user.show', ["event" => $event]);

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

        $loggedUserId = User::find(Auth::id());
    
        $clickedEventId = Event::find($id);

        
        $loggedUserId->events()->attach($clickedEventId);
        
        session()->flash('message', 'Your application has been successfully submitted!');

        return redirect()->route('logged_index');
        
    }

    public function unsubscribe($id)
    {
        $loggedUserId = User::find(Auth::id());
    
        $clickedEventId = Event::find($id);

        $loggedUserId->events()->detach($clickedEventId);
        

        return redirect()->route('logged_index');
    }

    

    public function edit($id)

    {
        $event = Event::findOrFail($id);

        return view('admin.edit', compact('event'));
    }

    public function myList(){

        //buscar en la lista de los eventos aquellos id que coincidan con el id del evento del user loggeado.

        
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
            $changesEvent['image']=$request->file('image')->store('img', 'public');

            }


        Event::where('id', '=', $id)->update($changesEvent);

        $event = Event::findOrFail($id);
        return redirect()->route('logged_index');
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
        return redirect()->route('logged_index');
    }
}
