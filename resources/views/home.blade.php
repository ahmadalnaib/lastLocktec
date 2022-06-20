@extends('layouts.app')
@include('partials.navbar')
@section('content')

<div class="row">
        <div class="col-xl-3 col-sm-3 mb-3">
          <div class="card  o-hidden h-100">
            <div class="card-body text-center">
              <div class="card-body-icon fa-3x">
              <img height="100%" width="100%" src="{{url('Campaign_launch_Flatline.svg')}}" alt="">
              </div>

            </div>
            <a class="card-footer text-dark bg-white  z-1" href="{{route('actions.index')}}">
              <h4 class="float-left ">{{__('actions.Manage_actions')}} <i class="bi bi-arrow-right-square-fill"></i></h4>

            </a>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              {{$actions_count}}
             </span>
          </div>
        </div>
        <div class="col-xl-3 col-sm-3 mb-3">
          <div class="card   o-hidden h-100">
            <div class="card-body text-center">
              <div class="card-body-icon">
                <img height="100%" width="100%" src="{{url('Data_organization_Outline.svg')}}" alt="">
              </div>

            </div>
            <a class="card-footer text-dark bg-white small z-1" href="{{route('categories.index')}}">
              <h4 class="float-left ">{{__('actions.Manage_categories')}} <i class="bi bi-arrow-right-square-fill"></i> </h4>

            </a>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                {{$categories_count}}
               </span>
          </div>
        </div>


      </div>

</div>

@endsection
