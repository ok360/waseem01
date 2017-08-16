<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use File;
class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images =  Image::all ();
        return view('image.create',compact ('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $image = $request->file ('image');

       $image_name= time ().'.'.$image->getClientOriginalExtension ();

       $image->move ('images',$image_name);

       $img = new Image();
       $img->name = $image_name;
       $img->save ();
       return back ();


//       return $image_name;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $image= Image::find($id);

//      File::delete('images/'.$image->name);

        unlink ('images/'.$image->name);

         Image::destroy ($id);

        return back ();


    }
}
