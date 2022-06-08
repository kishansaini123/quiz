@extends('layouts.frontend')
@section('content')
    <!--=================================
    Header Inner -->
    <section class="header-inner bg-overlay-black-50"
        style="background-image: url({{ asset('frontend/images/header-inner/002.jpg') }});">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="header-inner-title text-center">
                        <h1 class="text-white font-weight-normal">Our Services</h1>
                        <p class="text-white mb-0">We design and develop websites and web apps that can make sure you’re seen
                            and heard in the right circles.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    Header Inner -->

    <!--=================================
    Category -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-info feature-info-style-02">
                        <div class="feature-info-icon">
                            <i class="flaticon-monitor"></i>
                            <h5 class="mb-0 ml-4 feature-info-title">Web Development</h5>
                        </div>
                        <div class="feature-info-content">
                            <p class="mb-0">A highly interactive and fully-functional website is needed for your
                                business to keep it on the
                                right track. Be it helping sustain the fast-paced competition, increasing brand name,
                                highlighting
                                products and services among customers, or increasing sales and revenue, a website serves
                                your
                                business in multiple ways.</p>
                            <a href="#" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                        <div class="feature-info-bg-img"
                            style="background-image: url({{ asset('frontend/images/feature-info/001.jpg') }});"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-info feature-info-style-02">
                        <div class="feature-info-icon">
                            <i class="flaticon-mobile-phone"></i>
                            <h5 class="mb-0 ml-4 feature-info-title">App Development</h5>
                        </div>
                        <div class="feature-info-content">
                            <p class="mb-0">If you’ve been considering app development to take your business
                                forward, Squareboat is the service provider you
                                should place your trust in. We provide end-to-end development services for mobile apps for
                                Android as well as iOS platforms as that are in line with your organizational needs.</p>
                            <a href="#" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                        <div class="feature-info-bg-img"
                            style="background-image: url({{ asset('frontend/images/feature-info/002.jpg') }});"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-info feature-info-style-02">
                        <div class="feature-info-icon">
                            <i class="flaticon-design"></i>
                            <h5 class="mb-0 ml-4 feature-info-title">Prestashop Websites</h5>
                        </div>
                        <div class="feature-info-content">
                            <p class="mb-0">A complete Prestashop Websites for business. We work on all
                                technologies.Our experience makes us stand out from other web development.</p>
                            <a href="#" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                        <div class="feature-info-bg-img"
                            style="background-image: url({{ asset('frontend/images/feature-info/003.jpg') }});"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <div class="feature-info feature-info-style-02">
                        <div class="feature-info-icon">
                            <i class="flaticon-chart"></i>
                            <h5 class="mb-0 ml-4 feature-info-title">Ecommerce Development</h5>
                        </div>
                        <div class="feature-info-content">
                            <p class="mb-0">We are a premier digital solutions provider serving customers with its
                                astounding set of eCommerce solutions. We help customers adopt latest and advanced
                                technology
                                that helps us create competitive and futuristic digital solutions. Let’s Discuss Your Idea
                            </p>
                            <a href="#" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                        <div class="feature-info-bg-img"
                            style="background-image: url({{ asset('frontend/images/feature-info/004.jpg') }});"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    Category -->
@endsection
