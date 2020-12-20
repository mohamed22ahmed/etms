<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function profile(){
        return view('dashboard.profile');
    }

    public function assignment(){
        return view('dashboard.assignment');
    }

    public function user_courses(){
        return view('dashboard.user_courses');
    }

    public function attendance(){
        return view('dashboard.attendance');
    }

    public function settings(){
        return view('dashboard.settings');
    }
}
