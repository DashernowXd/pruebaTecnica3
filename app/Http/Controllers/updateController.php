<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class updateController extends Controller
{
    public function showInterface()
    {
        return view('updateStudent');
    }

    public function showInterfaceGroup()
    {
        return view('updateGroup');
    }

    public function updateStudent(Request $request)
    {
        $student = Student::find($request->id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->save();
        return response()->json($student);
    }
}
