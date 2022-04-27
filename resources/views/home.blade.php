@extends('layouts.app')
@include('partials.navbar')
@section('content')

<div class="row">
        <div class="col-xl-6 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body text-center">
              <div class="card-body-icon fa-3x">
                <i class="bi bi-back text-warning"></i>
              </div>
              <h2 class=" p-2">{{__('actions.Total_Actions')}}</h2>
              <h3>{{$actions_count}} <i class="bi bi-graph-up text-warning"></i></h3>
            </div>
            <a class="card-footer text-dark bg-white  z-1" href="{{route('actions.index')}}">
              <span class="float-left">{{__('actions.Manage_actions')}}</span>
              <span class="float-right">
              &#8594;
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-6 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body text-center">
              <div class="card-body-icon">
                <i class="bi bi-collection fa-3x text-warning"></i>
              </div>
              <h2 class="p-2">{{__('actions.Total_Categories')}}  </h2>
              <h3> {{$categories_count}} <i class="bi bi-graph-up text-warning"></i></h3>
            </div>
            <a class="card-footer text-dark bg-white small z-1" href="{{route('categories.index')}}">
              <span class="float-left">{{__('actions.Manage_categories')}}</span>
              <span class="float-right">
              &#8594;
              </span>
            </a>
          </div>
        </div>


      </div>

</div>

@endsection
