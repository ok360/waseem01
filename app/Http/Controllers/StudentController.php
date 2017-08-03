<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
 
	 public function index($name,$id)
	 {
	 	return $name;
	 }

	 public function admin($id)
	 {
	 	return 'Your Number is '.$id;
	 } 

}
