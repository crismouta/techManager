<?php

namespace App\Observers;

use App\Models\Event;
use Illuminate\Support\Facades\Mail;

class EventObserver
{
    /**
     * Handle the Event "created" event.
     *
     * @param  \App\Models\Event  $event
     * @return void
     */
    public function created(Event $event)
    {   

        Mail::raw('The new event "'.$event->id.'" has been successfully created!', function ($m) {
            $m->from('from@example.com', 'Lorem Meets');

            $m->to('jmasllorens@gmail.com', 'Jael Masllorens')->subject('You have a new notification');

        });

       

       /*  Mail::raw('The new event "'.$event->id.'" has been successfully created!', function ($m) {
            $m->from('promociones@gastronomus.net', 'Lorem Meets');

            $m->to('jmasllorens@gmail.com', 'Jael Masllorens')->subject('You have a new notification');

            //$m->to('recorda@gmail.com', 'Joan Recordà')->subject('You have a new notification');

        });

        dd('The new event "'.$event->i.'" has been successfully created!'); */
        
        /* Mail::raw('The new event "'.$event->id.'" has been successfully created!', function ($m) {
            $m->from('promociones@gastronomus.net', 'Lorem Meets');

            $m->to('jmasllorens@gmail.com', 'Jael Masllorens')->subject('You have a new notification');

            //$m->to('recorda@gmail.com', 'Joan Recordà')->subject('You have a new notification');

        });

        dd('The new event "'.$event->i.'" has been successfully created!'); */
        
         
     
        /* Mail::send('logged_index', ['event' => $event], function ($m) use ($event) {
            $m->from('loremmeets@loremmeets.com', 'Lorem Meets');

            $m->to('jmasllorens@gmail.com', 'Jael Masllorens')->subject('A new event has been successfully created!');

        });
         */
        
        //dd('A new event has been successfully created!');
    }

    /**
     * Handle the Event "updated" event.
     *
     * @param  \App\Models\Event  $event
     * @return void
     */
    public function updated(Event $event)
    {
        //
    }

    /**
     * Handle the Event "deleted" event.
     *
     * @param  \App\Models\Event  $event
     * @return void
     */
    public function deleted(Event $event)
    {
        //
    }

    /**
     * Handle the Event "restored" event.
     *
     * @param  \App\Models\Event  $event
     * @return void
     */
    public function restored(Event $event)
    {
        //
    }

    /**
     * Handle the Event "force deleted" event.
     *
     * @param  \App\Models\Event  $event
     * @return void
     */
    public function forceDeleted(Event $event)
    {
        //
    }
}
