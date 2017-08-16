@extends('layout.master')

@section('body')

    <form action="{{url ('image')}}" method="post" enctype="multipart/form-data">
        {{csrf_field ()}}
        <input type="file" name="image">
        <input type="submit">
    </form>


    <table class="table table-responsive">
        <tr>
            <td>image</td>
            <td>Action</td>
        </tr>
        @foreach($images as $image)
        <tr>
            <td>    <img src="{{asset ('images/'.$image->name)}}" style="height:200px;width: 200px"  alt=""></td>
            <td>
                {!! Form::open(['url'=>['image/'.$image->id],'method'=>'delete']) !!}
                {!! Form::submit('Delete') !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>





        



    @endsection