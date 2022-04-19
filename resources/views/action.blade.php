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
      <div class="card mb-3">

        <div class="card-header">
          <i class="fa fa-table"></i> Actions
          </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>num</th>
                  <th>Title</th>
                  <th>Slug </th>
                  <th> Content</th>
                  <th>Writer  </th>
                  <th>Publised  </th>
                  <th>Categories  </th>
                </tr>
              </thead>
              <tbody>
              @foreach($actions as $action)
                <tr>
                  <td>{{$action->id}}</td>
                  <td>{{ $action->title }}</td>
                  <td>{{$action->slug}}</td>
                  <td>{{ str_limit($action->body,100)}}</td>
                  <td>{{$action->user->name}}</td>
                  <td><input type="checkbox" value="{{$action->approved}}" {{$action->approved ? 'checked' : ''}}></td>
                  <td>{{$action->category->title}}</td>
                  <td>
                    <a class="btn btn-primary" href="">
                      <i class="fa fa-edit "></i>
                    </a>
                  </td>
                  <td>
                    <form method="post" action="">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-link"><i class="fa fa-trash "></i> </button>
                    </form>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted"></div>
      </div>
    </div>
@endsection
