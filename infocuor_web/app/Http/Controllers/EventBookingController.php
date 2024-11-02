<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventBooking;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;
use App\Mail\BookingAcceptedMail;
use App\Mail\BookingRejectedMail;



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
            //'status' => 'string|in:pending,accepted,rejected',
        ]);

       // Store the booking data using the model
       EventBooking::create([
        'user_id' => auth()->user()->id,
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
        //'status' => $validatedData['status'],
    ]);

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Event booking created successfully!');
    }




    // Display all bookings
    public function index()
    {
        try {
            // dd('test1');
            // $bookings = EventBooking::query()->get();
            // // dd('test');
            // dd($bookings);
            // // EventBooking::

            $bookings = DB::table('event_bookings')->get();
            //dd($bookings);
             return view('admin.member.booking', compact('bookings'));

        }
            catch (Exception $error) { dd($error); }

        //return view('admin.member.booking', compact('bookings'));
    }

    // Accept a booking
    public function accept($id)
    {
        $booking = EventBooking::findOrFail($id);
        $booking->status = 'accepted';
        $booking->save();

        // Send email to the user
        Mail::to($booking->email)->send(new BookingAcceptedMail($booking));

        return redirect()->back()->with('success', 'Booking accepted and email sent to customer.');
    }

    // Reject a booking
    public function reject($id)
    {
        $booking = EventBooking::findOrFail($id);
        $booking->status = 'rejected';
        $booking->save();

        // Send email to the user
        Mail::to($booking->email)->send(new BookingRejectedMail($booking));

        return redirect()->back()->with('success', 'Booking rejected and email sent to customer.');
    }


}
