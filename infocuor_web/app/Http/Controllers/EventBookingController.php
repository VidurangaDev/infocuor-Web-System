<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventBooking;
use App\Models\User;
use App\Models\EventAssignMember;
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

        $booking->tracking_status = 'Covering';
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


    public function fetchBookings() {
        $bookings = EventBooking::select('id', 'event_name', 'date')
            ->get()
            ->map(function ($booking) {
                return [
                    'id' => $booking->id,
                    'title' => $booking->event_name,
                    'start' => $booking->date,
                ];
            });

        return response()->json($bookings);
    }


    public function assignMembers(Request $request) {
        
            $eventId = $request->input('event_id');
            $userIds = $request->input('user_ids');

            // Assuming you have a pivot table event_assign_members
            $booking = EventBooking::find($eventId);
        
        if ($booking) {
            // Assign selected members to the event
            $booking->members()->sync($userIds);

            return redirect()->back()->with('success', 'Members assigned successfully.');
            }

            return redirect()->back()->with('error', 'Event not found.');
    }
   



    public function showCalendar($id)
    {
    // Fetch users with the usertype 'member'
    $booking = EventBooking::find($id);
    
    if (!$booking) {
        return abort(404, 'Booking not found.');
    }

    // Fetch users of type 'member'
    //$users = User::where('usertype', 'member')->get();

    $users = DB::table('users')
                ->where('usertype', 'member')
                ->get();

    dd($users);
    // Pass 'booking' and 'users' to the view
    return view('admin.member.calender', compact('booking', 'users'));
    }
    


    public function updateTrackingStatus(Request $request, $id)
    {
        $booking = EventBooking::findOrFail($id);

        // Ensure only authorized users (e.g., members or executives) can update
        if (auth()->user()->role !== 'executive' && auth()->user()->role !== 'member') {
            return back()->with('error', 'Unauthorized to update status.');
        }

        $booking->tracking_status = $request->status;

        if ($request->status === 'Completed') {
            $booking->service_completed = true;
            // Send completion email to the customer
            Mail::to($booking->customer_email)->send(new EventCompletedMail($booking));
        }

        $booking->save();

        return back()->with('success', 'Tracking status updated successfully.');
    }



}
