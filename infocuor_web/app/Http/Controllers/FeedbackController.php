<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Feedback::create([
            'user_id' => auth()->id(), // optional, if user is logged in
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->route('feedback.form')->with('success', 'Thank you for your feedback!');
    }
}
