@extends('layout.master')
@section('css')
    <style>
        body{
            background-color: #2ca02c;
        }
    .mynavbar{
    height:100px;
    }
    </style>
@endsection


@section('body')
    <h1>Home page</h1>
    <p>your number is {{$no+3}}</p>
    @foreach($names as $name)
        <h2>{{$name}}</h2>
    @endforeach
@endsection


