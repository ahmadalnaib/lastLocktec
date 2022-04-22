

@extends('layouts.app')
@include('partials.navbar')
@section('content')
    <div class="container mt-5">
        <div class="card card-default">
            <div class="card-header">
                Edit category
            </div>

            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-group">
                            @foreach($errors->all() as $error)
                                <li class="list-group-item text-danger">
                                    {{$error}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('categories.update',$category->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text"  id='title' class="form-control" name="title" value="{{$category->title}}">
                    </div>
                    <div class="form-group mt-4">
                        <button class="btn btn-success">Update Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
