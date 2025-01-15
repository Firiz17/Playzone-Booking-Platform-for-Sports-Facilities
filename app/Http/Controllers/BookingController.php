<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
{
    $facilities = Facility::all();
    return view('bookings.index', compact('facilities'));
}

public function store(Request $request)
{
    $request->validate([
        'facility_id' => 'required|exists:facilities,id',
        'start_time' => 'required|date|after:now',
        'end_time' => 'required|date|after:start_time',
    ]);

    $facility = Facility::find($request->facility_id);

    $totalPrice = $facility->price_per_hour * ((strtotime($request->end_time) - strtotime($request->start_time)) / 3600);

    $booking = Booking::create([
        'user_id' => auth()->id(),
        'facility_id' => $facility->id,
        'start_time' => $request->start_time,
        'end_time' => $request->end_time,
        'total_price' => $totalPrice,
        'status' => 'pending',
    ]);

    return redirect()->route('payments.create', $booking->id);
}
}
