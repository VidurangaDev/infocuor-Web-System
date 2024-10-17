<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function showForm()
    {
        return view('membership_form');
    }

    public function submitForm(Request $request)
    {
        // Validate form inputs
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'phone' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'university' => 'nullable|string',
            'experience_level' => 'required|string',
            'interest_area' => 'nullable|string',
            'membership_type' => 'required|string',
            'payment_method' => 'required|string',
            'terms' => 'required',
            'data_consent' => 'required',
        ]);

        // Save the data or send an email, etc.
        // Example: Save data to the database (assuming you have a membership table):
        // Membership::create($validated);

        // Redirect or return success message
        return redirect()->back()->with('success', 'Membership form submitted successfully!');
    }
}
