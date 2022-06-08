<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="Advenith" />
    <meta name="description" content="Advenith Technology Pvt. Ltd. - IT Solutions and Services Company in Gurugram" />
    <meta name="author" content="Ashwani Singh (Developer)" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!------ OG Mega Tags ---->
    <meta property="og:title" content="Advenith Technology Pvt. Ltd." />
    <meta property="og:url" content="https://advenith.com" />
    <meta property="og:image" content="{{ asset('frontend/logo.jpg') }}" />
    <meta property="og:type" content="company" />
    <meta property="og:description" content="Advenith Technology Pvt. Ltd. - IT Solutions and Services Company in Gurugram" />
    <title>{{ config('app.name', 'Advenith - IT Solutions and Services Company') }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon1.ico') }}" />

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo:400,500,600,700&amp;display=swap">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap/bootstrap.min.css') }}" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/animate/animate.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup/magnific-popup.css') }}" />

    <!-- Template Style -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    @yield('css')
  </head>
  <body>
    @include('frontend.header.navbar')
    @yield('content')

    @include('frontend.footer.footer')
    <!--=================================
    Back To Top-->
    <div id="back-to-top" class="back-to-top">up</div>
    <!--=================================
    Back To Top-->

    <!--=================================
    Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="{{ asset('frontend/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap/bootstrap.min.js') }}"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="{{ asset('frontend/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('frontend/js/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/swiperanimation/SwiperAnimation.min.js') }}"></script>
    <script src="{{ asset('frontend/js/counter/jquery.countTo.js') }}"></script>
    <script src="{{ asset('frontend/js/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    @yield('js')
  </body>
  </html>
