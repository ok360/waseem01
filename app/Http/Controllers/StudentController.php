<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
     {

        return view ('student.create');
     }
	public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->class= $request->class;
        $student->save ();
        return redirect ('/');
    }
    public function destroy ($id)
    {
        Student::destroy ($id);
        return back ();
    }
}
