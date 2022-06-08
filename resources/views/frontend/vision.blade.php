@extends('layouts.frontend')

@section('content')
    <!--=================================
                                        Header Inner -->
    <section class="header-inner header-inner-menu bg-overlay-black-50"
        style="background-image: url({{ asset('frontend/images/header-inner/006.jpg') }});">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="header-inner-title text-center">
                        <h1 class="text-white font-weight-normal">Our Mission & Vision</h1>
                        <p class="text-white mb-0">Our Core Values Describe How We Conduct Business</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-inner-nav">
            @include('frontend.partials.navtabs')
        </div>
    </section>
    <!--=================================
                                          Header Inner -->

    <!--=================================
                About -->
    <section class="space-pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section-title text-center">
                        <h2>Great engineering matters, but work ethics and professionalism matters even more.</h2>
                        <p>Our vision is to become industry leading globally through providing high quality, cost-effective services by harnessing the best intellect and by creating the best business opportunities.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 mb-4 mb-sm-0">
                    <div class="feature-info feature-info-style-02 bg-dark text-white">
                        <div class="feature-info-icon">
                            <i class="flaticon-eye text-white"></i>
                            <h4 class="mb-0 ml-4 feature-info-title text-white">Our Vision</h4>
                        </div>
                        <div class="feature-info-content">
                            <p class="mb-0">No managers, no artificial layers, no overheads. A flat team committed to doing great work. The difference this makes is hard to explain but can only be experienced. we cultivate a culture of innovation where members are motivated to think out-of-the-box and come up with creative ideas and strategic solutions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="feature-info feature-info-style-02 bg-primary text-white">
                        <div class="feature-info-icon">
                            <i class="flaticon-target text-white"></i>
                            <h4 class="mb-0 ml-4 feature-info-title text-white">Our Mission</h4>
                        </div>
                        <div class="feature-info-content">
                            <p class="mb-0">We provide a strategic perspective to solve dynamic business challenges faced by our clients. We ensure a smooth handover to your in-house team when you need to do so. Infact, we will help you setup your tech team if you need to! Every decision made in the product is taken with only one thing in mind - Your business, not ours.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                  About -->

    <!--=================================
                  About -->
    <section class="space-ptb">
        <div class="container">
            <div class="row d-lg-flex align-items-center justify-content-center pb-4 pb-md-5">
                <div class="col-lg-6">
                    <h2 class="mb-3 mb-lg-0">Why Choose Us?</h2>
                </div>
                <div class="col-lg-6 text-lg-right">
                    <a href="#" class="btn btn-light-round btn-round w-space">Let’s Get Started<i
                            class="fas fa-arrow-right pl-3"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="feature-info feature-info-style-07">
                        <div class="feature-info-img">
                            <img class="img-fluid" src="{{ asset('frontend/images/blog/001.jpg') }}" alt="">
                        </div>
                        <div class="feature-info-content">
                            <h4 class="feature-info-title">Creativity Unique Designers</h4>
                            <p>Combining strategizing skills with design and technology, we at Webomindapps, create the best-in-class web designs that are effective and impressive with the client's target market</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="feature-info feature-info-style-07">
                        <div class="feature-info-img">
                            <img class="img-fluid" src="{{ asset('frontend/images/blog/002.jpg') }}" alt="">
                        </div>
                        <div class="feature-info-content">
                            <h4 class="feature-info-title">Technology Coding Experts</h4>
                            <p>Our team of developers work closely with the customers to analyze, code and execute an entire suite of application with outstanding technical expertise, profound knowledge.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-info feature-info-style-07">
                        <div class="feature-info-img">
                            <img class="img-fluid" src="{{ asset('frontend/images/blog/003.jpg') }}" alt="">
                        </div>
                        <div class="feature-info-content">
                            <h4 class="feature-info-title">Discover Explore More</h4>
                            <p>Through the use of new, engaging ways of digital marketing, we deliver high-quality solutions that support you in connecting with your clients in ways that you haven't imagined before.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                  About -->
@endsection

@section('js')
    <script src="{{ asset('frontend/js/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jarallax/jarallax-video.min.js') }}"></script>
    <script src="{{ asset('frontend/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/horizontal-timeline/horizontal-timeline.js') }}"></script>
@endsection
