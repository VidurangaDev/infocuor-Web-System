<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HireFormController extends Controller
{
    public function showForm() {
        return view('hire-form');
    }

    public function submitForm(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'organization' => 'nullable|string|max:255',
            'project_name' => 'required|string|max:255',
            'event_date' => 'required|date',
            'location' => 'required|string|max:255',
            'event_type' => 'required|string',
            'guests' => 'nullable|integer',
            'duration' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'budget' => 'nullable|string|max:255',
            'editing' => 'nullable|string',
            'printing' => 'nullable|string',
            'album' => 'nullable|string',
            'terms' => 'required',
            'contact_method' => 'required|string',
        ]);

        // You can process the form data here, such as sending an email or saving to a database

        return back()->with('success', 'Your form has been submitted successfully!');
    }
}
