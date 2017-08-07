<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $students = Student::paginate(2);
        return view ('welcome',compact ('students'));
    }
}
