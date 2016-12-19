<!DOCTYPE html>
<html lang="en">
  <head>
@include('partials._head')
</head>
  <body>
   <!-- bootstrap default NavBar-->
   <div style="margin-top:150px">

   </div>
   <!--End NavBar-->

    <div class="container">

        @yield('content')

        @include('partials._footer')

  </div>
     @include('partials._javascript')

     @yield('scripts')
  </body>
</html>
