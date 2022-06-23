<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Locktec Admin Dashboard</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
  >
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"  defer>
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    

</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm p-4">
        <div class="container">
      
      
      
      
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav ms-auto ">
                
              
                 @include('partials.langNav')
      
                </ul>
                @auth
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
      
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
        
              <a href="{{route('categories.index')}}"><i class="bi bi-collection-fill "></i> {{__('actions.Manage_categories')}}
               </a>
             </li>
             <li>
        
              <a href="{{route('actions.index')}}"><i class="bi bi-back "></i> {{__('actions.Manage_actions')}} 
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
        
      
      
                </ul>
                @endauth
            </div>
      
      
      </nav>
      
    <div id="app">


        <main class="py-4 container">
            @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show">
               <strong> {{ session()->get('message') }}</strong>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @elseif(session()->has('warning'))
            <div class="alert alert-warning alert-dismissible fade show">
             <strong>   {{ session()->get('warning') }}</strong>
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
            @yield('content')

        </main>
    </div>



<script>
     $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });

    </script>



    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script src="https://kit.fontawesome.com/ca11177b7a.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js" integrity="sha512-5efjkDjhldlK+BrHauVYJpbjKrtNemLZksZWxd6Wdxvm06dceqWGLLNjZywOkvW7BF032ktHRMUOarbK9d60bg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/admin.js') }}" ></script>
    <script src="{{ asset('js/custom.js') }}" ></script>
</body>
</html>
