@extends('layouts.app')


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
  <h2 class="my-4">Edit Meta</h2>
  <form action="{{route('meta.update',$meta->id)}}" method="post" >
    @csrf
    @method('PUT')


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
                {{__('meta.title')}} ({{$key}})
              </label>
          <input type="text" class="form-control" name="title[{{$key}}]" value="{{old('title.' . $key,$meta->getTranslation('title',$key))}}" placeholder="Title">
        </div>
        <div class="form-group mb-3 p-3">
            <label  for="body">
                Description: ({{$key}})
              </label>
         <textarea class="form-control "  name="description[{{$key}}]"  cols="30" rows="10" placeholder="description">
          {{old('description.' .$key,$meta->getTranslation('description',$key))}}
         </textarea>
        </div>
        <div class="form-group mb-3 p-3">
            <label  for="body">
                Keywords: ({{$key}})
              </label>
          <textarea class="form-control ckeditor"  name="keywords[{{$key}}]"  cols="30" rows="10"  placeholder="	Keywords Details">
            {{old('keywords.' .$key,$meta->getTranslation('keywords',$key))}}
          </textarea>
        </div>

        </div>
        @endforeach

      </div>



    <button type="submit" class="btn  btn-danger">{{__('actions.Update_Meta')}}</button>
  </form>
</div>

@endsection
