<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm p-4">
  <div class="container">




          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav me-auto ">
            @include('partials.langNav')
        


          </ul>
          @auth
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ms-auto">
              <!-- Authentication Links -->

              @include('partials.sidebar')
              @include('partials.langNav')


          </ul>
          @endauth
      </div>


</nav>
