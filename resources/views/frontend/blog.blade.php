@extends('layouts.frontend')
@section('content')
    <!--=================================
    inner banner -->
    <section class="header-inner bg-overlay-black-50"
        style="background-image: url({{ asset('frontend/images/header-inner/008.jpg') }});">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="header-inner-title text-center">
                        <h1 class="text-white font-weight-normal">Blog</h1>
                        <p class="text-white mb-0">The sad thing is the majority of people have no clue about what they truly
                            want. They have no clarity. When asked the question</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    inner banner -->

    <!--=================================
    Blog -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <a href="{{ route('blog.show') }}"><img class="img-fluid"
                                    src="{{ asset('frontend/images/blog/01.jpg') }}" alt=""></a>
                        </div>
                        <div class="blog-post-content">
                            <div class="blog-post-info">
                                <div class="blog-post-author">
                                    <a href="#" class="btn btn-light-round btn-round text-primary">Marketing</a>
                                </div>
                                <div class="blog-post-date">
                                    <a href="#">Feb 4, 2020</a>
                                </div>
                            </div>
                            <div class="blog-post-details">
                                <h5 class="blog-post-title">
                                    <a href="{{ route('blog.show') }}">From a small startup to a leading global agency in
                                        10 Years.</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <a href="{{ route('blog.show') }}"><img class="img-fluid"
                                    src="{{ asset('frontend/images/blog/02.jpg') }}" alt=""></a>
                        </div>
                        <div class="blog-post-content">
                            <div class="blog-post-info">
                                <div class="blog-post-author">
                                    <a href="#" class="btn btn-light-round btn-round text-primary">Finance</a>
                                </div>
                                <div class="blog-post-date">
                                    <a href="#">Feb 15, 2020</a>
                                </div>
                            </div>
                            <div class="blog-post-details">
                                <h5 class="blog-post-title">
                                    <a href="{{ route('blog.show') }}">How google’s BERT algorithm affects your website
                                        traffic</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <a href="{{ route('blog.show') }}"><img class="img-fluid"
                                    src="{{ asset('frontend/images/blog/03.jpg') }}" alt=""></a>
                        </div>
                        <div class="blog-post-content">
                            <div class="blog-post-info">
                                <div class="blog-post-author">
                                    <a href="#" class="btn btn-light-round btn-round text-primary">Operations</a>
                                </div>
                                <div class="blog-post-date">
                                    <a href="#">Sep 19, 2020</a>
                                </div>
                            </div>
                            <div class="blog-post-details">
                                <h5 class="blog-post-title">
                                    <a href="{{ route('blog.show') }}">Five reasons why you must create a website for your
                                        company</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <a href="{{ route('blog.show') }}"><img class="img-fluid"
                                    src="{{ asset('frontend/images/blog/04.jpg') }}" alt=""></a>
                        </div>
                        <div class="blog-post-content">
                            <div class="blog-post-info">
                                <div class="blog-post-author">
                                    <a href="#" class="btn btn-light-round btn-round text-primary">Strategy</a>
                                </div>
                                <div class="blog-post-date">
                                    <a href="#">Oct 19, 2014</a>
                                </div>
                            </div>
                            <div class="blog-post-details">
                                <h5 class="blog-post-title">
                                    <a href="{{ route('blog.show') }}">Corporations that Prove Data is Key to Victorious
                                        Digital Transformation</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <a href="{{ route('blog.show') }}"><img class="img-fluid"
                                    src="{{ asset('frontend/images/blog/05.jpg') }}" alt=""></a>
                        </div>
                        <div class="blog-post-content">
                            <div class="blog-post-info">
                                <div class="blog-post-author">
                                    <a href="#" class="btn btn-light-round btn-round text-primary">Jobs</a>
                                </div>
                                <div class="blog-post-date">
                                    <a href="#">March 27, 2014</a>
                                </div>
                            </div>
                            <div class="blog-post-details">
                                <h5 class="blog-post-title">
                                    <a href="{{ route('blog.show') }}">Google, Facebook or Instagram Which one is best
                                        for my business?</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-post">
                        <div class="blog-post-image">
                            <a href="{{ route('blog.show') }}"><img class="img-fluid"
                                    src="{{ asset('frontend/images/blog/06.jpg') }}" alt=""></a>
                        </div>
                        <div class="blog-post-content">
                            <div class="blog-post-info">
                                <div class="blog-post-author">
                                    <a href="#" class="btn btn-light-round btn-round text-primary">Technology</a>
                                </div>
                                <div class="blog-post-date">
                                    <a href="#">Feb 19, 2014</a>
                                </div>
                            </div>
                            <div class="blog-post-details">
                                <h5 class="blog-post-title">
                                    <a href="{{ route('blog.show') }}">Five initial steps you must do to increase your
                                        business incomes</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 mt-md-5">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-primary-round btn-round">Load More<i class="fas fa-arrow-right pl-3"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    Blog -->

    <!--=================================
    Action Box -->
    <section class="space-pb dark-background">
        <div class="container">
            <div class="bg-dark text-center rounded py-5 px-3">
                <h2 class="text-white">Tell us about your idea, and we’ll make it happen.</h2>
                <h6 class="text-white">Have a brand problem that needs to be solved? We’d love to hear about it!</h6>
                <a href="#" class="btn btn-primary-round btn-round mx-0 mx-md-3 text-white">Let’s Get Started<i
                        class="fas fa-arrow-right pl-3"></i></a>
            </div>
        </div>
    </section>
    <!--=================================
    Action Box -->
@endsection
