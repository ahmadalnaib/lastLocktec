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
  <h2 class="my-4">Edit Action</h2>
  <form action="{{route('actions.update',$action->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

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
      <input type="text" class="form-control" name="title" placeholder="Title" value="{{$action->title}}">
    </div>
    <div class="form-group mb-3 p-3">
        <label  for="body">
            Body:
          </label>
     <textarea class="form-control ckeditor" name="body"  cols="30" rows="10" placeholder="Body">
       {{$action->body}}
     </textarea>
    </div>
    <div class="form-group mb-3 p-3">
        <label  for="body">
            Tecnische Details:
          </label>
      <textarea class="form-control ckeditor" name="tecnische"  cols="30" rows="10"  placeholder=" Tecnische Details">
        {{$action->tecnische}}
      </textarea>
    </div>
    <div class="form-group mb-3 p-3">
        <label  for="body">
           Price:
          </label>
      <input type="text" class="form-control " name="price" placeholder="Price" value="{{$action->price}}">
    </div>

    <div class="form-group mb-3 p-3">
      <label for="details">upload Image</label>
      <td><img width="100px" height="100px"  class="img-thumbnail " src="{{asset('storage/'.$action->image_path)}}" alt=""></td>
      <input type="file" name="image_path" class="form-control">
    </div>

    <button type="submit" class="btn  btn-danger">Update</button>
  </form>
</div>

@endsection
