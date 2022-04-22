@extends('layouts.app')
@include('partials.navbar')
@section('content')

    <div class="container mt-5">
        <div class="d-flex justify-content-end mb-2">
            <a href="{{route('categories.create')}}" class="btn btn-secondary btn-lg">Add category</a>
        </div>


        <div class="card card-default">
            <div class="card-header">Categories</div>

            @if($categories->count())
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <th>Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>
                                    <p>{{$category->title}}</p>
                                </td>


                                <td>
                                    <a href="{{route('categories.edit',$category->id)}}" class="btn btn-dark">Edit</a>
                                </td>
                                <td>
                                    <form action="{{route('categories.destroy',$category->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                            </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                    {!! $categories->links() !!}
                </div>



            @else
                <div class="lead text-center">
                    <p>There are no categories</p>
                </div>
            @endif
        </div>
        <a href="{{route('home')}}" class="btn btn-outline-dark mt-4">Back</a>
    </div>
@endsection
