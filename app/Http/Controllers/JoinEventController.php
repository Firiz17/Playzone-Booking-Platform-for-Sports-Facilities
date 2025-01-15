<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class JoinEventController extends Controller
{
    public function index($id)
    {
        return view('joinevent', ['event' => ['id' => $id]]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'team' => 'nullable|string|max:255',
        ]);

        // Store the registration...

        return back()->with('success', 'Successfully registered for the event!');
    }
} 