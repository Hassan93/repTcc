<!DOCTYPE html>
<html lang="en">
  <head>
@include('partials._head')
</head>
  <body>
   <!-- bootstrap default NavBar-->
   @include('partials._nav')
   <!--End NavBar-->

    <div class="container">

        @yield('content')

        @include('partials._footer')

  </div>
     @include('partials._javascript')

     @yield('scripts')
  </body>
</html>
