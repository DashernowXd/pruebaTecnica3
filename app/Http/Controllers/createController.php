<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class createController extends Controller
{
    public function registerStudent(Request $request) {
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->save();
        return response()->json($student);
    }

    
    public function interfaceCreate(){
        return view('createStudent');
    }

    public function createGroup(Request $request) {
        $group = new Group();
        $group->name = $request->name;
        $group->teacherId = $request->teacherId;
        $group->numStudents = $request->numStudents;
        $group->save();
        return response()->json($group);
    }

}
