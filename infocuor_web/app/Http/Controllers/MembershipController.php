<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;

class MembershipController extends Controller
{
    public function showForm()
    {
        return view('membership_form');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'fullname' => 'required|string|max:255',
            'dob' => 'required|date',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|unique:memberships,email',
            'address' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'experience' => 'required|string',
            'interest' => 'nullable|string',
            'membership' => 'required|string',
            'fee' => 'nullable|numeric',
            'payment' => 'required|string',
            'terms' => 'accepted',
            'consent' => 'accepted',
            'skills' => 'nullable|string',
            'motivation' => 'nullable|string',
        ]);

        Membership::create($data);

        // Redirect or return success message
        return redirect()->back()->with('success', 'Membership form submitted successfully!');
    }
}
