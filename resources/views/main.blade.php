<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>
  

  <body>
    <!-- default bootstrap navbar -->
    @include('partials._nav')

    <div class="container">
      @include('partials._messages')
      
      @yield('content')

      @include('partials._footer')
    </div>
    
    @include('partials._javascript')
    @yield("scripts")
  </body>
</html>