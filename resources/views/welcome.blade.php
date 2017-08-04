@extends('layout.master')
@section('body')
    <h1>Home page</h1>
    @if(session ('message'))
        <div class="alert alert-success col-md-6">
            <h2>{{session ('message')}}</h2>
        </div>

    @endif
    <a href="{{route('product.index')}}">Product</a>
    <a href="{{url ('product/create ')}}">Product create</a>
@endsection


