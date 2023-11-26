<!DOCTYPE html>
<html lang="en">

@include('head')

<body>

 

  <!-- ======= Header ======= -->
 @include('header')

  <!-- ======= Hero Section ======= -->
@include('hero')

 @yield('content')

  <!-- ======= Footer ======= -->
  @yield('footer')

  @include('script')


</body>

</html>