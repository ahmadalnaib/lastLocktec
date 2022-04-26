    {{-- admin nav --}}
    <nav id="admin-nav">
      <ul>
          <li class="text-center">
              <img  width="100px" src="{{url('logo.svg')}}" alt="">
          </li>
      <li>
      <a   href="{{route('home')}}"><i class="bi bi-house-door text-dark"></i> Home</a>
     </li>
     <li>
      <a href="{{route('actions.index')}}"><i class="bi bi-back text-dark"></i> {{__('actions.ActionsSite')}}</a>
     </li>
     <li>
      <a href="{{route('categories.index')}}"><i class="bi bi-collection text-dark"></i> {{__('actions.Categories')}}</a>
     </li>
     </ul>
   </nav>
<header id="toggle" class="toggle">
<button id="btn-admin">
<i class="bi bi-list fa-2x"></i>
</button>
</header>
