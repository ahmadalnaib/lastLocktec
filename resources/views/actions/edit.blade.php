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



    <ul class="nav nav-tabs" id="myTab" role="tablist">
        @foreach (config('locales.languages') as $key => $val)
        <li class="nav-item" role="presentation">
          <a class="nav-link {{$loop->index ==0 ? 'active':''}}"
            id="{{$key}}-tab"
             data-bs-toggle="tab"
             href="#{{$key}}"
              role="tab"
             aria-controls="{{$key}}"
              aria-selected="true">{{$val['name']}}</a>
        </li>
        @endforeach

      </ul>
     <div class="tab-content" id="myTabContent">
        @foreach (config('locales.languages') as $key => $val)
        <div class="tab-pane fade {{$loop->index ==0 ? 'show active' :''}}" id="{{$key}}" role="tabpanel" aria-labelledby="{{$key}}-tab">

          <div class="form-group mb-3 p-3">
            <label for="title">
                {{__('actions.title')}} ({{$key}})
              </label>
          <input type="text" class="form-control" name="title[{{$key}}]" value="{{old('title.' . $key,$action->getTranslation('title',$key))}}" placeholder="Title">
        </div>
        <div class="form-group mb-3 p-3">
            <label  for="body">
                Body: ({{$key}})
              </label>
         <textarea class="form-control "  name="body[{{$key}}]"  cols="30" rows="10" placeholder="Body">
          {{old('body.' .$key,$action->getTranslation('body',$key))}}
         </textarea>
        </div>
        <div class="form-group mb-3 p-3">
            <label  for="body">
                Tecnische Details: ({{$key}})
              </label>
          <textarea class="form-control ckeditor"  name="tecnische[{{$key}}]"  cols="30" rows="10"  placeholder="Tecnische Details">
            {{old('tecnische.' .$key,$action->getTranslation('tecnische',$key))}}
          </textarea>
        </div>
        <div class="form-group mb-3 p-3">
            <label  for="price">
                Price: ({{$key}})
              </label>
          <input type="text" class="form-control" name="price[{{$key}}]" value="{{old('price.' .$key,$action->getTranslation('price',$key))}}" placeholder="Price">
        </div>
        </div>
        @endforeach

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
