@extends('layout.master')

@section('body')
    <h1>Dashboard Teacher</h1>
    @if(session ('success'))
        <div class="alert alert-success">
            <p>{{session ('success')}}</p>
        </div>
    @endif
    <a href="{{url ('teacher/create')}}" class="btn btn-primary">Create</a>
    <table class="table table-responsive">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>updated At</th>
            <th>Created At</th>
            <th>Action</th>

        </tr>
        @foreach($teachers as $teacher)
        <tr>
            <td>{{$teacher->id}}</td>
            <td>{{$teacher->name}}</td>
            <td>{{$teacher->age}}</td>
            <td>{{$teacher->updated_at->diffForHumans()}}</td>
            <td>{{$teacher->created_at->diffForHumans()}}</td>
            <td>

               {!! Form::open(['url'=>['teacher',$teacher->id],'method'=>'delete']) !!}
                <a href="{{url ('teacher/'.$teacher->id.'/edit')}}" class="btn btn-info">Edit</a>
                <input type="submit" value="detele">
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>


@endsection