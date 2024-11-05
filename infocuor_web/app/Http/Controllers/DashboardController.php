<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->usertype == 'user'){

            return view('admin.dashboard');

        }
        elseif(Auth::user()->usertype == 'executive')
        {
            return view('admin.dashboard_executive');
        }
        elseif(Auth::user()->usertype == 'member')
        {
            return view('admin.dashboard_member');
        }else{
            return redirect()->back();
        }

    }

    // public function dashboard()
    // {

    //     $userCount = User::count();
    //     $feedbackCount = Feedback::count();
    //     $bookingsCount = EventBooking::count();


    //     $userCreationProgress = 75;  // Replace with your actual logic


    //     return view('admin.dashboard_executive', compact('userCount', 'feedbackCount', 'bookingsCount', 'userCreationProgress'));
    // }
}
