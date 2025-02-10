<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deleteController extends Controller
{
    public function showInterface()
    {
        return view('DeleteStudent');
    }

    public function showInterfaceGroup()
    {
        return view('deleteGroup');

    }

    public function deleteStudent(Request $request)
    {
        
        
    }

    public function deleteGroup(){
        
    }




}

