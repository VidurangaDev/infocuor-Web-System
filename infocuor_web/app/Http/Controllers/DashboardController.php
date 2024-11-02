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
}
