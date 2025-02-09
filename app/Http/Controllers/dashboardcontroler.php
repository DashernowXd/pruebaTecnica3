<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardcontroler extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }
}
