<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HireForm;

class HireFormController extends Controller
{
    public function showForm() {
        return view('hire-form');
    }

    public function submitForm(Request $request) {
         $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'event_name' => 'required|string|max:255',
            'event_type_day_or_night' => 'required',
            'event_type_indoor_outdoor' => 'required',
            'location' => 'required|string|max:255',
            'faculty_department' => 'required|string|max:255',
            'expected_duration' => 'required|integer',
            'expected_audience' => 'required|integer',
            'date' => 'required|date',
            'time' => 'required',
            'requirements' => 'nullable|array',
            'photography_type' => 'nullable|array',
            'videography_type' => 'nullable|array',
        ]);

        HireForm::create($request->all());

        // You can process the form data here, such as sending an email or saving to a database

        return back()->with('success', 'Your form has been submitted successfully!');
    }
}
