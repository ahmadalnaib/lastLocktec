@extends('layouts.app')
@include('partials.navbar')
@section('content')

<div class="row">
        <div class="col-xl-6 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
              <i class="fas fa-fw fa-th-list fa-3x"></i>
              </div>
              <h2 class="mr-5">Actions {{$actions_count}} </h2>
            </div>
            <a class="card-footer text-dark bg-white  z-1" href="{{route('actions.index')}}">
              <span class="float-left">More Info</span>
              <span class="float-right">
              &#8594;
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-6 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list fa-3x"></i>
              </div>
              <h2 class="mr-5">Categories {{$categories_count}}  </h2>
            </div>
            <a class="card-footer text-dark bg-white small z-1" href="{{route('categories.index')}}">
              <span class="float-left">More Info</span>
              <span class="float-right">
              &#8594;
              </span>
            </a>
          </div>
        </div>


      </div>

</div>

@endsection
