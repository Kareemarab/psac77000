<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Event;
use App\Post;
use DB;

class EventsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show', 'welcome']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('created_at', 'desc')->paginate(4);
        return view('events.index')->with('events', $events);
    }

    public function welcome()
    {
        $events = Event::orderBy('created_at', 'desc')->get();
        return view('welcome')->with('events', $events);
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
        $this->validate($request, [
            'title' => 'required',
            'location' => 'required',
            'time' => 'required',
            'body' => 'required'
        ]);

        // Create event
        $event = new Event;
        $event->title = $request->input('title');
        $event->location = $request->input('location');
        $event->time = $request->input('time');
        $event->body = $request->input('body');
        $event->user_id = auth()->user()->id;
        $event->save();

        return redirect('/events')->with('success', 'Event Created'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('events.show')->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);

        // Check for correct user
        if (auth()->user()->id !==$event->user_id) {
            return redirect('/events')->with('error', 'Unauthorised Page');
        }

        return view('events.edit')->with('event', $event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
        'title' => 'required',
        'location' => 'required',
        'time' => 'required',
        'body' => 'required'
        ]);

        // Create event
        $event = Event::find($id);
        $event->title = $request->input('title');
        $event->location = $request->input('location');
        $event->time = $request->input('time');
        $event->body = $request->input('body');
        $event->save();

        return redirect('/events')->with('success', 'Event Updated'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        // Check for correct user

        if (auth()->user()->id !==$event->user_id) {
            return redirect('/events')->with('error', 'Unauthorised Page');
        }
        
        $event->delete();
        return redirect('/events')->with('success', 'Event Removed');
    }
}
