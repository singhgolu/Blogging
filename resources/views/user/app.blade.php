<!DOCTYPE html>
<html lang="en">

  <head>

    @include('user.layouts.head')

  </head>

  <body>
    <!-- Navigation start here -->
    @include('user.layouts.header')
    <!-- Navigation end here -->

    @section('main-content')
      @show
    
    <!-- Footer start here -->
    @include('user.layouts.footer')
    <!-- Footer end here -->

  </body>

</html>
