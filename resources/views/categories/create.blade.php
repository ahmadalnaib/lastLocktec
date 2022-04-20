
@extends('layouts.app')
@include('partials.navbar')
@section('content')

    <div class="container mt-5">
        <div class="card card-default">
            <div class="card-header">
                Create Category
            </div>
            <div class="card-body">
                @include('partials.errors')
                <form action="{{route('categories.store')}}" method="post" >
                    @csrf
                    <div class="form-group ">
                        <label for="title">Category </label>
                        <input type="text"  id='title' class="form-control" name="title" value="{{old('title')}}">
                    </div>

                    <div class="form-group mt-4">
                        <button class="btn btn-success">Add categories</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
