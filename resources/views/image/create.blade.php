@extends('layout.master')

@section('body')

    <form action="{{url ('image')}}" method="post" enctype="multipart/form-data">
        {{csrf_field ()}}
        <input type="file" name="image">
        <input type="submit">
    </form>

    @endsection