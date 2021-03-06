@extends('layout.master')

@section('body')
    <h1>Dashboard Teacher</h1>
    @if(session ('success'))
        <div class="alert alert-success">
            <p>{{session ('success')}}</p>
        </div>
    @endif
    <a href="{{url ('teacher/create')}}" class="btn btn-primary">Create</a>
    {!! Form::open(['url'=>'search','method'=>'post']) !!}
    <input type="text" name="search">
    <input type="submit" value="search">
    {!! Form::close() !!}
    <table class="table table-responsive">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Profession</th>
            <th>Contact #</th>
            <th>updated At</th>
            <th>Created At</th>
            <th>Action</th>

        </tr>
        @foreach($teachers as $teacher)
        <tr>
            <td>{{$teacher->id}}</td>
            <td>{{$teacher->name}}</td>
            <td>{{$teacher->age}}</td>
            @if($teacher->profession)
            <td>{{$teacher->profession->name}}</td>
            @else
                <td>No record Found</td>
            @endif
            <td>
                <ul>
                    @forelse($teacher->contactNumbers as $contactNumber)
                    <li>{{$contactNumber->contact}}</li>
                    @empty
                        <li>N/A</li>
                    @endforelse
                </ul>
            </td>
            <td>{{$teacher->updated_at->diffForHumans()}}</td>
            <td>{{$teacher->created_at->diffForHumans()}}</td>
            <td>

               {!! Form::open(['url'=>['admin/teacher',$teacher->id],'method'=>'delete']) !!}
                <a href="{{url ('admin/teacher/'.$teacher->id.'/edit')}}" class="btn btn-info">Edit</a>
                <input type="submit" value="detele">
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>


@endsection