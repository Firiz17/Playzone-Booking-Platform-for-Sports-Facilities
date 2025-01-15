<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility; // Use the Facility model
use App\Models\Booking; // Use the Booking model

class BookingController extends Controller
{
    public function create()
    {
        // Fetch facilities from the database
        $facilities = Facility::all();

        // Define time slots (can be customized or fetched dynamically)
        $timeSlots = [
            '08:00 AM', '09:00 AM', '10:00 AM', '11:00 AM', '12:00 PM',
            '01:00 PM', '02:00 PM', '03:00 PM', '04:00 PM', '05:00 PM',
        ];

        return view('bookings.create', compact('facilities', 'timeSlots'));
    }

    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'facility' => 'required|exists:facilities,id',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
        ]);

        // Store booking in the database
        Booking::create([
            'facility_id' => $request->facility,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);

        // Redirect to the payment page with booking details
    return redirect()->route('bookings.payment', ['booking' => $booking->id]);
    }

    public function payment($id)
{
    $booking = Booking::with('facility')->findOrFail($id);

    return view('bookings.payment', compact('booking'));
}

public function processPayment(Request $request, $id)
{
    $booking = Booking::findOrFail($id);

    // Mock payment processing logic
    // Replace this with real payment gateway integration (e.g., Stripe, PayPal, etc.)
    $booking->update(['payment_status' => 'paid']);

    return redirect()->route('bookings.create')->with('success', 'Payment successful! Booking confirmed.');
}

}
