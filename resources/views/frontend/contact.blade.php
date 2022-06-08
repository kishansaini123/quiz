@extends('layouts.frontend')
@section('css')
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/toastr/toastr.min.css') }}">
    @livewireStyles
@endsection
@section('content')
    <!--=================================
    Contat Form -->
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h1>Let’s work together</h1>
                        <p>We are excited to take on your new project and help you build something amazing!</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-lg-around position-relative pt-5">
                <div class="col-lg-4 col-md-5 mb-4">
                    <div class="contact-address">
                        <div class="contact-item">
                            <label>Address:</label>
                            <p>Office no. 129, 1st floor, JMD Megapolis, Sector-48, Gurgaon-122022, Haryana, India</p>
                        </div>
                        <div class="contact-item">
                            <label>Phone:</label>
                            <h4 class="mb-0 font-weight-bold"><a href="#">+(91) 7838744880</a></h4>
                        </div>
                        <div class="contact-item">
                            <label>Email:</label>
                            <a class="text-dark" href="#">info@advenith.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 pr-lg-5">
                    <div class="p-4 p-md-5 bg-white shadow">
                        <h4>Need an expert? you are more than welcomed to leave your contact info and we will be in touch
                            shortly</h4>
                        @livewire('contact-form-component')
                    </div>
                </div>
                <div class="contact-bg-logo">
                    <i class="fas fa-comment"></i>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    Contat Form  -->
@endsection
@section('js')
    <!-- Toastr -->
    <script src="{{ asset('backend/plugins/toastr/toastr.min.js') }}"></script>
    <script>
        window.addEventListener('success-msg', event => {
          toastr.success(event.detail.msg);
      });
    </script>
    @livewireScripts
@endsection