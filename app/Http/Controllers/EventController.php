<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function home(){
        $events = auth()->user()->event()->get();
        return view('dashboard')->with('events', $events);
    }

    public function addEvent(){
        return view('add_event');
    }
    
    public function createEvent(Request $request){
        $request->validate([
            "name" => "required",
            "type" => "required",
            "description" => "required",
            "start_date" => "required|date|after:today",
            "end_date" => "required|date|after:start_date",
            "time" => "required",
            "venue" => "required",
            "city" => "required",
            "state" => "required",
            "website" => "url",
            "facebook" => "url",
            "twitter" => "url",
            "linkedin" => "url",
            "instagram" => "url",
            "event_logo" => "image|nullable",
            "sponsor_image" => "image|nullable",
            "speakers_image" => "image|nullable",
            "firstname" => "required",
            "lastname" => "required",
            "company_name" => "required",
            "email" => "required|email:rfc,dns",
            "phone" => "required",
        ]);

        auth()->user()->event()->create($request->all());

        return redirect()->route('dashboard')->with('message', 'Event created successfully');
    }


    public function eventDetail($id){
        $event = Event::findOrFail($id);

        return view('event_details')->with('event', $event);
    }
}
