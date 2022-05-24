@extends('layouts.app')
@include('partials.navbar')
@section('content')




<div class="d-flex justify-content-end mb-2">
    <a href="{{route('meta.create')}}" class="btn btn-secondary btn-lg">{{__('actions.add_meta')}}</a>
</div>

        <div class="card card-default">
            <div class="card-header">HTML Tag</div>

            @if($metas->count())
                <div class="card-body">
                    <table class="table">
                        <thead>
                      <th>Title</th>
                        <th>Description</th>
                        <th>Keywords</th>
                        <th>Edit</th>

                        </thead>
                        <tbody>
                        @foreach($metas as $meta)
                            <tr>
                                <td>
                                    <p> {{$meta->title}}</p>

                                </td>
                                <td>
                                    <p> {{$meta->description}}</p>

                                </td>
                                <td>
                                    <p> {{$meta->keywords}}</p>

                                </td>


                                <td>
                                    <a href="{{route('meta.edit',$meta)}}" class="btn btn-dark"> {{__('actions.Edit_Meta')}}</a>
                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                    {!! $metas->links() !!}
                </div>



            @else
                <div class="lead text-center">
                    <p>There are no Metas</p>
                </div>
            @endif
        </div>
        <a href="{{route('home')}}" class="btn btn-outline-dark mt-4">{{__('actions.back')}}</a>
    </div>
@endsection




