<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventRegistration;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('event', compact('events'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('event.show', compact('event'));
    }

    public function joinEvent($id)
    {
        $event = Event::findOrFail($id);
        return view('joinevent', compact('event'));
    }

    public function storeRegistration(Request $request)
    {
        $validated = $request->validate([
            'event_id' => 'required|exists:events,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'team' => 'nullable|string|max:255',
        ]);

        $event = Event::findOrFail($request->event_id);

        if ($event->available_slots <= 0) {
            return back()->with('error', 'Sorry, this event is fully booked.');
        }

        // Create registration
        EventRegistration::create($validated);

        // Decrease available slots
        $event->decrement('available_slots');

        return back()->with('success', 'You have successfully registered for the event!');
    }
} 