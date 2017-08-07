<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
     {
        Student::create([
            'name'=>'Waseem',
            'class'=>'Mcs'
                        ]);
        return back ();
     }
	
}
