@extends('layout.master')

@section('body')
    <h1>Create Teacher</h1>

    {!! Form::open(['url'=>'teacher','method'=>'post']) !!}
    Name:<input type="text" name="name" >
    Age:<input type="number" name="age">
    Profession:<input type="text" name="profession">
    <input type="submit">
    {!! Form::close() !!}

    @if($errors->any)
    <ul>
        @foreach($errors->all() as $error)

        <li>{{$error}}</li>
            @endforeach
    </ul>
    @endif

@endsection