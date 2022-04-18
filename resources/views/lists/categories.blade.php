<option selected>Choose Category</option>

@if(!isset($action))
    

@foreach ($categories  as $category)

<option value="{{$category->id}}">{{$category->title}}</option>
    
@endforeach


    
@else
@foreach ($categories  as $category)

<option value="{{$category->id}}" 
  {{$action->category_id == $category->id ? 'selected':''}}>
  {{$category->title}}</option>
    
@endforeach  
@endif

