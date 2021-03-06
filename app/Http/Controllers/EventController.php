<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

use Carbon\Carbon;

class EventController extends Controller
{
    public function home(){
        $events = auth()->user()->event()->get();
        return view('dashboard')->with('events', $events);
    }

    public function welcome(){
        $events = Event::all();
        return view('welcome')->with('events', $events);
    }

    public function addEvent(){
        return view('add_event');
    }
    
    public function createEvent(Request $request){
        $request->validate([
            "name" => "required|max:255",
            "type" => "required",
            "description" => "required",
            "start_date" => "required|date|after:today",
            "end_date" => "required|date",
            "time" => "required",
            "venue" => "required",
            "city" => "required",
            "state" => "required",
            "website" => "url",
            "facebook" => "url",
            "twitter" => "url",
            "linkedin" => "url",
            "instagram" => "url",
            "event_logo" => "image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable",
            "sponsor_image" => "image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable",
            "speakers_image" => "image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable",
            "firstname" => "required",
            "lastname" => "required",
            "company_name" => "required",
            "email" => "required|email",
            "phone" => "required",
        ]);

        $event =  auth()->user()->event()->create($request->all());
        $user_id = auth()->user()->id;

        if ($request->hasFile('event_logo')) {
            $eventLogo = 'logo_'.$user_id.time().'.'.$request->event_logo->extension();  
            $request->event_logo->move(public_path('images'), $eventLogo);

            $event->update([
                'event_logo'=>$eventLogo
            ]);
        }
        if ($request->hasFile('sponsor_image')) {
            $sponsorImage = 'sponsor_'.$user_id.time().'.'.$request->sponsor_image->extension();  
            $request->sponsor_image->move(public_path('images'), $sponsorImage);

            $event->update([
                'sponsor_image'=>$sponsorImage
            ]);
        }
        if ($request->hasFile('speakers_image')) {
            $speakersImage = 'speaker_'.$user_id.time().'.'.$request->speakers_image->extension();  
            $request->speakers_image->move(public_path('images'), $speakersImage);

            $event->update([
                'speakers_image'=>$speakersImage
            ]);
        }


        return redirect()->route('dashboard')->with('message', 'Event created successfully');
    }


    public function eventDetail($id){
        $event = Event::findOrFail($id);

        return view('event_details')->with('event', $event);
    }

    public function search(Request $request){
        $search = $request->input('search');
        $events = Event::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('type', 'LIKE', "%{$search}%")
            ->orWhere('state', 'LIKE', "%{$search}%")
            ->orderBy('start_date', 'DESC')->get();
    
        return view('welcome', compact('events'));
    }

}
