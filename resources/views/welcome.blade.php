@extends('layout.master')
@section('body')
    <h1>Home page</h1>
    @if(session ('message'))
        <div class="alert alert-success col-md-6">
            <h2>{{session ('message')}}</h2>
        </div>

    @endif
    <a href="{{route('product.index')}}">Product</a>
    <a href="{{url ('student/create ')}}">Student create</a>
    <table class="table table-responsive">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Class</th>
            <th>Action</th>

        </tr>
        @foreach($students as $student)
            <tr>

                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->class}}</td>
                    <td>
                        {!! Form::open(['url'=>['student/delete',$student->id],'method'=>'delete']) !!}
                        <input type="submit" value="Delete">
                        {!! Form::close() !!}
                    </td>
            </tr>
        @endforeach

    </table>
    {{$students->links()}}
@endsection


