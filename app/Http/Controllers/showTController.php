<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student_model;
use App\group_model;

class showTController extends Controller
{
   
    public function showStudent()
    {
        $Student=Student_model::all();
        return view('showStudent', compact('Student'));
        
    }

    public function showTableGroups()
    {
        $groups=group_model::all();
        return view('showGroup', compact('groups'));


    }
    

    public function searchStudentForUp(Request $request)
    {

        $matricula = $request->input('matricula');
        $student = Student_model::where('matricula', $matricula)->first();

        if(!$student)
        {
            return redirect()->back()->with('error', 'Estudiante no encontrado');
        }

        return view('updateStudent', compact('student'));


    }

    public function searchStudForUpBtn($matricula)
    {
        $student = Student_model::where('matricula', $matricula)->first();

        if (!$student) {
            return redirect()->back()->with('error', 'Estudiante no encontrado');
         }

    return view('updateStudent', compact('student'));
    }



    public function searchStudForDownBtn($matricula)
    {
        $student = Student_model::where('matricula', $matricula)->first();

        if (!$student) {
            return redirect()->back()->with('error', 'Estudiante no encontrado');
         }

    return view('DeleteStudent', compact('student'));
    }






    public function searchStudentForDown(Request $request)
    {

        $matricula = $request->input('matricula');
        $student = Student_model::where('matricula', $matricula)->first();

        if(!$student)
        {
            return redirect()->back()->with('error', 'Estudiante no encontrado');
        }

        return view('DeleteStudent', compact('student'));


    }

    public function searchGroupForUp(Request $request)
    {
        $matricula = $request->input('matricula');
        $group = group_model::where('matricula', $matricula)->first();

        if(!$group)
        {
            return redirect()->back()->with('error', 'Estudiante no encontrado');
        }

        return view('updateGroup', compact('group'));

    }

    public function searchGroupForDown(Request $request){
        $matricula = $request->input('matricula');
        $group = group_model::where('matricula', $matricula)->first();

        if(!$group)
        {
            return redirect()->back()->with('error', 'Estudiante no encontrado');
        }

        return view('deleteGroup', compact('group'));

    }



    public function searchGrpForUpBtn($matricula)
    {
        $group = group_model::where('matricula', $matricula)->first();

        if (!$group) {
            return redirect()->back()->with('error', 'Estudiante no encontrado');
         }

    return view('updateGroup', compact('group'));
    }



    public function searchGrpForDownBtn($matricula)
    {
        $group = group_model::where('matricula', $matricula)->first();

        if (!$group) {
            return redirect()->back()->with('error', 'Estudiante no encontrado');
         }

    return view('deleteGroup', compact('group'));
    }


}
