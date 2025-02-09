<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deleteController extends Controller
{
    public function showInterface()
    {
        return view('DeleteStudent');
    }

    public function deleteStudent(Request $request)
    {
        $student = Student::find($request->id);
        $student->delete();
        return response()->json($student);
    }




}

