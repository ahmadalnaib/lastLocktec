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
  <h2 class="my-4">{{__('actions.add_category')}}</h2>
  <form action="{{route('categories.store')}}" method="post">
    @csrf



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
        <input type="text" class="form-control" name="title[{{$key}}]" value="{{old('title.' . $key)}}" placeholder="Title">
      </div>



      </div>
      @endforeach

    </div>



    <button type="submit" class="btn  btn-danger btn-lg ">{{__('actions.add_category')}}</button>
  </form>
</div>

@endsection
