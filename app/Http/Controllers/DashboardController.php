<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard/dashboard');
    }

    public function device()
    {
        return view('dashboard/device');
    }
    public function blast()
    {
        return view('dashboard/blast');
    }
    public function template()
    {
        return view('dashboard/template');
    }

    public function contact()
    {
        return view('dashboard/contact');
    }
}
