<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
      $teachers = Teacher::where('name',$request->search)
          ->orWhere ('age',$request->search)
          ->get ();
        return view ('teacher.index',compact ('teachers'));
    }
    public function index()
    {
        $teachers = Teacher::all ();
//        return dd($teachers);
        return view('teacher.index',compact ('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate ($request,[
            'name'=>'required',
            'age'=>'required'
        ]);
       Teacher::create($request->all ());
       return redirect ('teacher')->with('success','Record created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        // $teacher =  Teacher::find($id);
        return view ('teacher.edit' ,compact ('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $teacher =  Teacher::find($id);
        $teacher->name= $request->name;
        $teacher->age= $request->age;
        $teacher->save ();
        return redirect ('teacher');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Teacher::destroy ($id);
        return redirect ('teacher');
    }
}
