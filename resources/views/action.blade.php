@extends('layouts.app')

@section('content')

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



</div>
@endsection
