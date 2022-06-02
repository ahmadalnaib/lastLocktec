    {{-- admin nav --}}
    <nav id="admin-nav">
      <ul>
          <li class="text-center">
              <img  width="100px" src="{{url('logo.svg')}}" alt="">
          </li>

          <li>
            <a class="link-danger pe-4" target="_blank" href="{{ url('/') }}">
              <i class="bi bi-eye-fill text-danger"></i> {{__('actions.go')}}
                </a>
           </li>

      <li class="{{(request()->routeIs('home.*')) ? 'active' : '' }}">
      <a   href="{{route('home')}}"><i class="bi bi-house-door-fill "></i> Dashboard</a>
     </li>
     <li>

      <a href="{{route('actions.index')}}"><i class="bi bi-back "></i> {{__('actions.Manage_actions')}}  <span class="badge  bg-danger">
    {{$categories_count}}
   </span>
   </a>
     </li>
     <li>

      <a href="{{route('categories.index')}}"><i class="bi bi-collection-fill "></i> {{__('actions.Manage_categories')}}  <span class="badge  bg-danger">
    {{$categories_count}}
   </span>
      
       </a>
     </li>

     <li>

        <a href="{{route('meta.index')}}"><i class="bi bi-tags-fill "></i> {{__('actions.Manage_meta')}}  </a>
       </li>


      <li>
        <a  href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
       <i class="bi bi-door-closed-fill text-danger "></i>  {{ __('Logout') }}
     </a>

     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
         @csrf
     </form>
      </li>

     </ul>
   </nav>
<header id="toggle" class="toggle">
<button id="btn-admin">
<i class="bi bi-border-width fa-2x text-white"></i>
</button>
</header>
