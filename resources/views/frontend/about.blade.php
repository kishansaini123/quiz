@extends('layouts.frontend')

@section('content')
    <!--=================================
            Header Inner -->
    <section class="header-inner header-inner-menu bg-overlay-black-50"
        style="background-image: url({{ asset('frontend/images/header-inner/001.jpg') }});">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="header-inner-title text-center">
                        <h1 class="text-white font-weight-normal">About Advenith</h1>
                        <p class="text-white mb-0">Our Core Values Describe How We Conduct Business.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-inner-nav">
            @include('frontend.partials.navtabs')
        </div>
    </section>
    <!--=================================
            Header Inne -->

    <!--=================================
            History -->
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="section-title text-center">
                        <h2>Established 2017 in Advenith Technology, <br> We provide a strategic perspective to solve
                            dynamic business challenges faced by our clients.</h2>
                        <p class="px-xl-5">We are an agency for eCommerce, which attaches great importance to a
                            practice-oriented approach. Our team has many years of experience as well as comprehensive
                            know-how in on-line marketing and media communication. Our agency offers you comprehensive and
                            individual support for your new or already established e-commerce projects.
                            Having {{ Carbon\Carbon::createFromDate(2017, 01, 01)->diffInYears(Carbon\Carbon::now()) }}
                            plus years of experience crossing excellent challenges, moving towards successful growth and
                            stretching our services, we have covered all the industries and gained experience in dealing
                            with local and global clients with custom requirements.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="cd-horizontal-timeline">
                        <div class="timeline">
                            <div class="events-wrapper">
                                <div class="events">
                                    <ul>
                                        <li><a href="#0" data-date="01/01/2017" class="selected">2017</a></li>
                                        <li><a href="#0" data-date="01/01/2018">2018</a></li>
                                        <li><a href="#0" data-date="01/01/2019">2019</a></li>
                                        <li><a href="#0" data-date="01/01/2020">2020</a></li>
                                        <li><a href="#0" data-date="01/01/2021">2021</a></li>
                                        <li><a href="#0" data-date="01/01/2022">2022</a></li>
                                    </ul>
                                    <span class="filling-line" aria-hidden="true"></span>
                                </div>
                                <!-- .events -->
                            </div>
                            <!-- .events-wrapper -->
                            <ul class="cd-timeline-navigation">
                                <li><a href="#0" class="prev inactive"></a></li>
                                <li><a href="#0" class="next"></a></li>
                            </ul>
                            <!-- .cd-timeline-navigation -->
                        </div>
                        <!-- .timeline -->
                        <div class="events-content">
                            <ul>
                                <li class="selected" data-date="01/01/2017">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h1 class="year">2017</h1>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="timeline-text">
                                                <h6 class="text-dark"> Harnessing the power of innovation in the IT
                                                    industry and empowering
                                                    growth with sharp skillsets, Advenith Technology has emerged as a global
                                                    web & mobile app
                                                    development service provider. Our next-generation solutions and hands-on
                                                    latest technology
                                                    enables us to deliver the best possible outcome.</h6>
                                                <p class="border-left pl-3 font-italic">High-performance technology
                                                    solutions for operational excellence..</p>
                                                <p class="mb-0">With our cutting-edge solutions,
                                                    we shape our clients’ future so that they emerge as high performing
                                                    businesses.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li data-date="01/01/2018">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h1 class="year">2018</h1>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="timeline-text">
                                                <h6 class="text-dark">We provide a strategic perspective to solve
                                                    dynamic business challenges faced by
                                                    our clients. At Render Infotech, we cultivate a culture of innovation
                                                    where members are motivated
                                                    to think out-of-the-box and come up with creative ideas and strategic
                                                    solutions. With an aim to
                                                    generate high ROI for our clients..</h6>
                                                <p class="border-left pl-3 font-italic">Embrace new tools to drive
                                                    innovation and path-breaking solutions.</p>
                                                <p class="mb-0">We believe in building long-lasting business
                                                    relationships.
                                                    We strike a perfect balance of business and technology to utilize our
                                                    technical expertise for
                                                    implementing industry-specific solutions..</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li data-date="01/01/2019">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h1 class="year">2019</h1>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="timeline-text">
                                                <h6 class="text-dark">We have with us services of experienced industry
                                                    professionals who assist
                                                    us in successfully understanding & meeting the emerging
                                                    requirements of web designing, e-commarce solution, web development,
                                                    software developement</h6>
                                                <p class="border-left pl-3 font-italic">Leverage latest emerging
                                                    technologies to create differentiated positioning.</p>
                                                <p class="mb-0">We provide a wide array of personalized IT
                                                    solutions to its customers across the Country. We not only bring your
                                                    business online,
                                                    but also provide you with innovative technologies and world- class
                                                    designs.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li data-date="01/01/2020">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h1 class="year">2020</h1>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="timeline-text">
                                                <h6 class="text-dark">Their in-depth technical know how & support of
                                                    advanced installation
                                                    equipment also allows us to ensure the overall performance of these
                                                    products meets
                                                    expectations and demands of our clients
                                                </h6>
                                                <p class="border-left pl-3 font-italic">Providing clients with services of
                                                    the highest quality standards.</p>
                                                <p class="mb-0">Advenith Technology is a next-generation digital
                                                    transformation consulting and software development firm that assists
                                                    businesses in reimagining their operations for the digital age.
                                                    We provide a wide assortment of personalized IT solutions to its
                                                    customers across the Country. </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li data-date="01/01/2021">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h1 class="year">2021</h1>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="timeline-text">
                                                <h6 class="text-dark">We are provides cutting-edge technological
                                                    solutions & modern infrastructure stack built
                                                    around hybrid cloud, software-defined networks, digital workplace, and
                                                    other elements that supports
                                                    companies to transform their businesses.</h6>
                                                <p class="border-left pl-3 font-italic">Complete transparency and
                                                    accountability throughout development.</p>
                                                <p class="mb-0">Combining strategizing skills with design and
                                                    technology, we at Webomindapps, create the best-in-class
                                                    web designs that are effective and impressive with the client's target
                                                    market.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li data-date="01/01/2022">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h1 class="year">2022</h1>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="timeline-text">
                                                <h6 class="text-dark">Advenith Technology is a leading IT services
                                                    provider which has established a name in the industry by
                                                    delivering great bespoke web and mobile applications. Our premium
                                                    clientele can vouch for our quality
                                                    of work and they trust us for all their critical projects.</h6>
                                                <p class="border-left pl-3 font-italic">Streamlined workflow to respond to
                                                    clients’ needs today & tomorrow.</p>
                                                <p class="mb-0">At Advenith Technology, we design and develop
                                                    websites and web apps that can make sure you’re seen and heard in the
                                                    right circles.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- .events-content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
            History -->

    <!--=================================
            portfolio -->
    <section class="space-pb popup-gallery overflow-hidden">
        <div class="container-fluid">
            <div class="row d-flex align-items-end">
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-3">
                    <a class="portfolio-img" href="{{ asset('frontend/images/gallery/001.jpg') }}"><img
                            class="img-fluid" src="{{ asset('frontend/images/gallery/001.jpg') }}" alt=""></a>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-3">
                    <a class="portfolio-img" href="{{ asset('frontend/images/gallery/011.jpeg') }}"><img
                            class="img-fluid w-100" src="{{ asset('frontend/images/gallery/011.jpeg') }}" alt=""></a>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-3">
                    <a class="portfolio-img" href="{{ asset('frontend/images/gallery/003.jpg') }}"><img
                            class="img-fluid" src="{{ asset('frontend/images/gallery/003.jpg') }}" alt=""></a>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-3">
                    <a class="portfolio-img" href="{{ asset('frontend/images/gallery/004.jpg') }}"><img
                            class="img-fluid" src="{{ asset('frontend/images/gallery/004.jpg') }}" alt=""></a>
                </div>
            </div>
            <div class="row d-flex align-items-end">
                <div class="col-md-6 col-lg-3 mt-0 mt-lg-3">
                    <a class="portfolio-img" href="{{ asset('frontend/images/gallery/005.jpg') }}"><img
                            class="img-fluid" src="{{ asset('frontend/images/gallery/005.jpg') }}" alt=""></a>
                </div>
                <div class="col-md-6 col-lg-3 mt-4 mt-lg-3">
                    <a class="portfolio-img" href="{{ asset('frontend/images/gallery/006.jpg') }}"><img
                            class="img-fluid w-100" src="{{ asset('frontend/images/gallery/006.jpg') }}" alt=""></a>
                </div>
                <div class="col-md-6 col-lg-3 mt-4 mt-lg-3">
                    <a class="portfolio-img" href="{{ asset('frontend/images/gallery/007.jpeg') }}"><img
                            class="img-fluid" src="{{ asset('frontend/images/gallery/007.jpeg') }}" alt=""></a>
                </div>
                <div class="col-md-6 col-lg-3 mt-4 mt-lg-3">
                    <a class="portfolio-img" href="{{ asset('frontend/images/gallery/008.jpeg') }}"><img
                            class="img-fluid" src="{{ asset('frontend/images/gallery/008.jpeg') }}" alt=""></a>
                </div>
            </div>
            <div class="row d-flex align-items-end">
                <div class="col-md-6 col-lg-3 mt-0 mt-lg-3">
                    <a class="portfolio-img" href="{{ asset('frontend/images/gallery/009.jpeg') }}"><img
                            class="img-fluid" src="{{ asset('frontend/images/gallery/009.jpeg') }}" alt=""></a>
                </div>
                <div class="col-md-6 col-lg-3 mt-4 mt-lg-3">
                    <a class="portfolio-img" href="{{ asset('frontend/images/gallery/010.jpeg') }}"><img
                            class="img-fluid w-100" src="{{ asset('frontend/images/gallery/010.jpeg') }}" alt=""></a>
                </div>
                <div class="col-md-6 col-lg-3 mt-4 mt-lg-3">
                    <a class="portfolio-img" href="{{ asset('frontend/images/gallery/002.jpg') }}"><img
                            class="img-fluid" src="{{ asset('frontend/images/gallery/002.jpg') }}" alt=""></a>
                </div>
                <div class="col-md-6 col-lg-3 mt-4 mt-lg-3">
                    <a class="portfolio-img" href="{{ asset('frontend/images/gallery/01.jpg') }}"><img
                            class="img-fluid" src="{{ asset('frontend/images/gallery/01.jpg') }}" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
            portfolio -->

    @include('frontend.partials.testimonial')
@endsection

@section('js')
    <script src="{{ asset('frontend/js/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jarallax/jarallax-video.min.js') }}"></script>
    <script src="{{ asset('frontend/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/horizontal-timeline/horizontal-timeline.js') }}"></script>
@endsection
