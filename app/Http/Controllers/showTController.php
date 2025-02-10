<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showTController extends Controller
{
    public function showgroup()
    {
        return view('showGroup');
    }
    public function showStudent()
    {
        return view('showStudent');
    }




    public function showTableStudents()
    {
        
    }
    public function showTableGroups()
    {

    }

}
