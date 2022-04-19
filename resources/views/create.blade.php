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
      <select name="category_id" class="form-control">
        @include('lists.categories')
      </select>
    </div>

    <div class="form-group mb-3 p-3">
      <input type="text" class="form-control" name="title" placeholder="Title">
    </div>
    <div class="form-group mb-3 p-3">
     <textarea class="form-control" name="body"  cols="30" rows="10" placeholder="Body"></textarea>
    </div>
    <div class="form-group mb-3 p-3">

      <textarea class="form-control" name="tecnische"  cols="30" rows="10"  placeholder=" Tecnische Details"></textarea>
    </div>
    <div class="form-group mb-3 p-3">
      <input type="text" class="form-control" name="price" placeholder="Price">
    </div>

    <div class="form-group mb-3 p-3">
      <label for="details">upload Image</label>
      <input type="file" name="image_path" class="form-control">
    </div>

    <button type="submit" class="btn  btn-danger">Create</button>
  </form>
</div>

@endsection
