@extends('layouts.app')
@include('partials.navbar')
@section('content')

<div class="row">
        <div class="col-xl-3 col-sm-3 mb-3">
          <div class="card  o-hidden h-100">
            <div class="card-body text-center">
              <div class="card-body-icon fa-3x">
              <img height="100%" width="100%" src="{{url('discount.svg')}}" alt="">
              </div>
           
            </div>
            <a class="card-footer text-dark bg-white  z-1" href="{{route('actions.index')}}">
              <h4 class="float-left ">{{__('actions.Manage_actions')}} <i class="bi bi-arrow-right-square-fill"></i></h4>
              
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-3 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body text-center">
              <div class="card-body-icon">
                <i class="bi bi-collection fa-3x  text-warning"></i>
              </div>
             
            </div>
            <a class="card-footer text-dark bg-white small z-1" href="{{route('categories.index')}}">
              <h4 class="float-left ">{{__('actions.Manage_categories')}} <i class="bi bi-arrow-right-square-fill"></i> </h4> 
             
            </a>
          </div>
        </div>


      </div>

</div>

@endsection
