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
            return view('dashboard');
        }
        elseif(Auth::user()->usertype == 'admin')
        {
            return view('admin.adminHome');
        }

    }
}
