@extends('layouts.app')

@include('partials.navbar')
@section('content')

<!--
<div>
    @includewhen(!count($actions),'alerts.empty',['msg'=>'No Actions'])




@foreach($actions as $action)
    {{$action->title}}
    <img src="{{$action->image_path}}" height="40px" width="40px" class="card-img-top" alt="...">
@endforeach
{{--

@foreach($categories as $category)
    @foreach($category->actions as $action)
        <ul>
            <li>
                <a href="{{ $action->id }}">{{ $action->title }}</a>
                <h1>{{$action->body}}</h1>
            </li>
        </ul>
    @endforeach
@endforeach --}}



</div> -->


<div class="container-fluid">
    <div class="d-flex justify-content-end mb-2">
        <a href="{{route('actions.create')}}" class="btn btn-secondary btn-lg btn-block">Add Action</a>
    </div>
      <div class="card mb-3">

        <div class="card-header">
          <i class="fa fa-table"></i> Actions
          </div>
          @if($actions->count())
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>num</th>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Slug </th>
                  <th>Content</th>
                  <th>Writer  </th>

                  <th>Categories  </th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
              @foreach($actions as $action)
                <tr>
                  <td>{{$action->id}}</td>
                  <td><img width="100px" height="100px"  class="img-thumbnail " src="{{asset('storage/'.$action->image_path)}}" alt=""></td>
                  <td>{{ $action->title }}</td>
                  <td>{{$action->slug}}</td>
                  <td>{{ str_limit($action->body,100)}}</td>
                  <td>{{$action->user->name}}</td>
                  <td>{{$action->category->title ?? 'No Cateory'}}</td>
                  <td>
                    <a class="btn btn-primary" href="{{route('actions.edit',$action->id)}}">
                      <i class="fa fa-edit "></i>
                    </a>
                  </td>
                  <td>
                    <form method="post" action="{{route('actions.destroy',$action)}}">
                      @csrf
                      @method('DELETE')
                      <button onclick="return confirm('are you sure ?')"  type="submit" class="btn btn-danger "><i class="fa fa-trash "></i> </button>
                    </form>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            {!! $actions->links() !!}
          </div>
          @else
          <div class="lead text-center">
              <p>There are no Actions</p>
          </div>
      @endif
        </div>
        <div class="card-footer small text-muted"></div>
      </div>
      <a href="{{route('home')}}" class="btn btn-outline-dark mt-4">Back</a>
    </div>
@endsection
