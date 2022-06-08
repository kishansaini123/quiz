<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="Advenith Company" />
    <meta name="description" content="Advenith - IT Solutions and Services Company in Gurugram" />
    <meta name="author" content="ashwanisingh" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <title>{{ config('app.name', 'Advenith - IT Solutions and Services Company') }}</title> --}}
    <title>@yield('pageTitle', 'Advenith - IT Solutions and Services Company')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon1.ico') }}" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}" />
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/toastr/toastr.min.css') }}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    @livewireStyles
    @yield('css')
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
    <!-- Preloader -->
  {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div> --}}
    @include('backend.header.navbar')
    @include('backend.header.main-sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('page-title')
        <!-- Main content -->
<div class="content">
  <div class="container-fluid">
        @yield('content')
  </div>
</div>
    </div>
    @include('backend.footer.footer')
    </div>
    <!--=================================
    Javascript -->
    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>
    @livewireScripts
    <!-- Toastr -->
    <script src="{{ asset('backend/plugins/toastr/toastr.min.js') }}"></script>
    <!-- SweetAlert2 -->
    <script src="{{ asset('backend/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    @yield('js')
    <script>
      window.addEventListener('success-msg', event => {
          toastr.success(event.detail.msg);
      });
      window.addEventListener('error-msg', event => {
          toastr.error(event.detail.msg);
      });
      window.addEventListener('show-delete-confirmation', event => {
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            Livewire.emit('deleteConfirmed')
          }
        });
      });
      window.addEventListener('deleted', event => {
        toastr.success(event.detail.message);
      });
  </script>
  </body>
  </html>
