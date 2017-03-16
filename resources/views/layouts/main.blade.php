<!DOCTYPE html>
<html lang="en">
  <head>
@include('partials._head')
@include('partials._javascript')
</head>
  <body>
    <div class="container" style="margin-top:20px;">
        @yield('content')
        @include('partials._footer')

  </div>

     @yield('scripts')
     <script type="text/javascript">
     	$(document).ready(function(){
     		@yield('jquery')
     	});
     </script>
  </body>
</html>
