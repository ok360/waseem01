@extends('layout.master')

@section('body')
    <h1>Create Student</h1>
    <form action="{{url ('student/store')}}" method="post">
        {{csrf_field ()}}
        Name:<input type="text" name="name" >
        Class:<input type="text" name="class">
        <input type="submit">
    </form>

    {!! Form::open(['url'=>'student/store','method'=>'post']) !!}
    Name:<input type="text" name="name" >
    Class:<input type="text" name="class">
    <input type="submit">
    {!! Form::close() !!}



@endsection