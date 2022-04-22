@extends('layouts.app')

@include('partials.navbar')
@section('content')
@if (session('msg'))
<div class="alert alert-success">
    {{ session('msg') }}
</div>
@endif
{{--        show errors--}}
@if(count($errors)>0)
@foreach($errors->all() as $error)
    <div class="alert alert-danger">{{$error}}</div>
@endforeach
@endif
<div class="col-md-12 bg-white p-4">
  <h2 class="my-4">Add New Action Site</h2>
  <form action="{{route('actions.store')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group mb-3 p-3">
        <label for="title">
            Category:
          </label>
      <select name="category_id" class="form-control">
        @include('lists.categories')
      </select>
    </div>

    <div class="form-group mb-3 p-3">
        <label for="title">
            Title:
          </label>
      <input type="text" class="form-control" name="title" placeholder="Title">
    </div>
    <div class="form-group mb-3 p-3">
        <label  for="body">
            Body:
          </label>
     <textarea class="form-control "  name="body"  cols="30" rows="10" placeholder="Body"></textarea>
    </div>
    <div class="form-group mb-3 p-3">
        <label  for="body">
            Tecnische Details:
          </label>
      <textarea class="form-control ckeditor"  name="tecnische"  cols="30" rows="10"  placeholder="Tecnische Details"></textarea>
    </div>
    <div class="form-group mb-3 p-3">
        <label  for="price">
            Price:
          </label>
      <input type="text" class="form-control" name="price" placeholder="Price">
    </div>

    <div class="form-group mb-3 p-3">
      <label for="image_path">upload Image:</label>
      <input type="file" name="image_path" class="form-control">
      <small class="text-danger">Max Image Size 2048</small>
    </div>

    <button type="submit" class="btn  btn-danger btn-lg ">Create Actionsite</button>
  </form>
</div>

@endsection
