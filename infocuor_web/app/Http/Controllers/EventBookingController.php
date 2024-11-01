<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventBooking;  // Import the EventBooking model

class EventBookingController extends Controller
{
     /**
     * Handle the form submission to create an event booking.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitForm(Request $request)
    {
        // Validate the form data
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:20',
            'event_name' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'event_location' => 'required|string|max:255',
            'faculty' => 'required|string',
            'department' => 'nullable|string',
            'photography' => 'sometimes|boolean',
            'videography' => 'sometimes|boolean',
            'live_streaming' => 'sometimes|boolean',
            'media_reporting' => 'sometimes|boolean',
        ]);

       // Store the booking data using the model
       EventBooking::create([
        'user_id' => auth()->user()->id, // Link to the authenticated user
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'phone' => $validatedData['phone'],
        'event_name' => $validatedData['event_name'],
        'date' => $validatedData['date'],
        'time' => $validatedData['time'],
        'event_location' => $validatedData['event_location'],
        'faculty' => $validatedData['faculty'],
        'department' => $validatedData['department'],
        'photography' => $request->has('photography'),
        'videography' => $request->has('videography'),
        'live_streaming' => $request->has('live_streaming'),
        'media_reporting' => $request->has('media_reporting'),
    ]);

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Event booking created successfully!');
    }
}
