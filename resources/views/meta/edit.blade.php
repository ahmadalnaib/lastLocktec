

@extends('layouts.app')
@include('partials.navbar')
@section('content')
    <div class="container mt-5">
        <div class="card card-default">
            <div class="card-header">
                Edit Tags
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
                <form action="{{route('meta.update',$meta)}}" method="post">
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
                <label  for="body">
                    Title: ({{$key}})
                  </label>
              <textarea class="form-control "  name="title[{{$key}}]"  cols="30" rows="10"  placeholder="description">
                {{old('title.' .$key,$meta->getTranslation('title',$key))}}
              </textarea>
            </div>

            <div class="form-group mb-3 p-3">
                <label  for="body">
                    Description: ({{$key}})
                  </label>
              <textarea class="form-control "  name="description[{{$key}}]"  cols="30" rows="10"  placeholder="description">
                {{old('description.' .$key,$meta->getTranslation('description',$key))}}
              </textarea>
            </div>

            <div class="form-group mb-3 p-3">
                <label  for="body">
                    Keywords: ({{$key}})
                  </label>
              <textarea class="form-control "  name="keywords[{{$key}}]"  cols="30" rows="10"  placeholder="keywords">
                {{old('keywords.' .$key,$meta->getTranslation('keywords',$key))}}
              </textarea>
            </div>



        </div>
        @endforeach

      </div>
                    <div class="form-group mt-4">
                        <button class="btn btn-success">Update Html Tags</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
