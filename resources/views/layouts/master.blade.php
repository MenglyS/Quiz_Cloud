<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.header')
</head>

<body>
    <!-- Topbar Start -->
    <!-- Topbar End -->


    <!-- Navbar Start -->

    <!-- Navbar End -->


    <!-- Carousel Start -->
    
    @yield('content')

    <!-- Blog End -->


    <!-- Footer Start -->
    @include('layouts.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    @include('layouts.javascriptLink')
</body>

</html>