

@extends('layouts.app')
@include('partials.navbar')
@section('content')
    <div class="container mt-5">
        <div class="card card-default">
            <div class="card-header">
               {{__('actions.Edit_category')}}
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
          <input type="text" class="form-control" name="title[{{$key}}]" value="{{old('title.' . $key,$category->getTranslation('title',$key))}}" placeholder="Title">
        </div>



        </div>
        @endforeach

      </div>
                    <div class="form-group mt-4">
                        <button class="btn btn-success">{{__('actions.Update_category')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
