<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // dashboard page
    public function index()
    {
        return view('dashboard.index');
    }
}
