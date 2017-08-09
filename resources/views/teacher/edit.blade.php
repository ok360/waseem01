@extends('layout.master')

@section('body')
    <h1>Edit Teacher</h1>

    {!! Form::open(['url'=>['teacher',$teacher->id],'method'=>'put']) !!}
    Name:<input type="text" name="name" value="{{$teacher->name}}">
    Age:<input type="number" name="age" value="{{$teacher->age}}">
    <input type="submit">
    {!! Form::close() !!}



@endsection