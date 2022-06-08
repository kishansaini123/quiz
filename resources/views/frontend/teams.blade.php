@extends('layouts.frontend')

@section('content')
    <!--=================================
                            Header Inner -->
    <section class="header-inner header-inner-menu bg-overlay-black-50"
        style="background-image: url({{ asset('frontend/images/header-inner/005.jpg') }});">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="header-inner-title text-center">
                        <h1 class="text-white font-weight-normal">Meet Our Team</h1>
                        <p class="text-white mb-0">Our office and culture? It's Awesome! 🙌</p>
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
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2 class="mb-3">Individually, we're a drop. Together, we're an ocean.</h2>
                        <p>We are a bunch of dreamers, designers, and futurists. We are high on collaboration, low on ego, 
                            and take our happy hours seriously. We take out time to celebrate our team's successes–and we celebrate often.</p>
                    </div>
                    <a href="#" class="btn btn-light-round btn-round w-space">Know More About<i
                            class="fas fa-arrow-right pl-3"></i></a>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <img class="img-fluid border-radius mb-4 mt-4" src="{{ asset('frontend/images/about/0001.jpg') }}" alt="">
                            <img class="img-fluid border-radius mb-4 mb-sm-0" src="{{ asset('frontend/images/about/0002.jpg') }}" alt="">
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid border-radius mb-4" src="{{ asset('frontend/images/about/005.jpg') }}" alt="">
                            <div class="counter counter-03">
                                <div class="counter-content">
                                    <span class="timer" data-to="352" data-speed="10000">352</span>
                                    <label>Projects Complete</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
              About -->

    <!--=================================
              team -->
    <section class="space-pb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section-title text-center">
                        <h2>Meet our Team</h2>
                        <p class="lead">Our team is friendly, talkative, and fully reliable.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                    <div class="team">
                        <div class="team-bg"></div>
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('frontend/images/team/001.jpg') }}" alt="">
                        </div>
                        <div class="team-info">
                            <a href="#" class="team-name">Vinay Garg</a>
                            <p>Founder & CEO</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                    <div class="team">
                        <div class="team-bg"></div>
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('frontend/images/team/003.jpg') }}" alt="">
                        </div>
                        <div class="team-info">
                            <a href="#" class="team-name">Vikas Goel</a>
                            <p>Web Developer</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                    <div class="team">
                        <div class="team-bg"></div>
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('frontend/images/team/006.jpg') }}" alt="">
                        </div>
                        <div class="team-info">
                            <a href="#" class="team-name">Ashwani Singh</a>
                            <p>Laravel Developer</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                    <div class="team">
                        <div class="team-bg"></div>
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('frontend/images/team/005.jpg') }}" alt="">
                        </div>
                        <div class="team-info">
                            <a href="#" class="team-name">Faisal Alam Siddiqui</a>
                            <p>Laravel Developer</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                    <div class="team">
                        <div class="team-bg"></div>
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('frontend/images/team/002.jpg') }}" alt="">
                        </div>
                        <div class="team-info">
                            <a href="#" class="team-name">Gyanilal kumawat</a>
                            <p>Full Stack Developer</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                    <div class="team">
                        <div class="team-bg"></div>
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('frontend/images/team/004.jpg') }}" alt="">
                        </div>
                        <div class="team-info">
                            <a href="#" class="team-name">Soikat Chakrabarty </a>
                            <p>React Developer</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
              team -->

    @include('frontend.partials.testimonial')
@endsection

@section('js')
    <script src="{{ asset('frontend/js/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jarallax/jarallax-video.min.js') }}"></script>
    <script src="{{ asset('frontend/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/horizontal-timeline/horizontal-timeline.js') }}"></script>
@endsection
