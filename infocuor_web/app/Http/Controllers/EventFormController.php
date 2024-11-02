<?php

namespace App\Http\Controllers;

use App\Models\EventSubmission;
use Illuminate\Http\Request;

class EventFormController extends Controller
{
    public function submitForm(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email',
            'eventName' => 'required|string',
            'time' => 'required|string',
            'indoorOutdoor' => 'required|string',
            'location' => 'required|string',
            'faculty' => 'required|string',
            'duration' => 'required|integer',
            'audience' => 'required|integer',
            'date' => 'required|date',
            'time' => 'required',
            'requirement' => 'array',
            'photoType' => 'array',
            'videoType' => 'array',
        ]);

        // Save data to the database
        EventSubmission::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'event_name' => $data['eventName'],
            'event_time' => $data['time'],
            'indoor_outdoor' => $data['indoorOutdoor'],
            'location' => $data['location'],
            'faculty' => $data['faculty'],
            'duration' => $data['duration'],
            'audience' => $data['audience'],
            'date' => $data['date'],
            'time' => $data['time'],
            'requirements' => $data['requirement'],
            'photo_types' => $data['photoType'],
            'video_types' => $data['videoType'],
        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
