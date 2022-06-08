@extends('layouts.frontend')

@section('content')

<!--=================================
banner -->
<section class="banner">
<div class="swiper-container">
    <div class="swiper-wrapper h-700 h-sm-500">
    <div class="swiper-slide align-items-center d-flex responsive-overlap-md bg-overlay-black-30" style="background-image:url({{ asset('frontend/images/slider/slider11.jpg') }}); background-size: cover; background-position: center center;">
        <div class="swipeinner container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-10 text-center">
            <h1 data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.25s">We transform your vision into creative results</h1>
            <h6 data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.5s">Advenith is a design thinking-based, technology-driven, full stack digital agency.</h6>
            <a class="btn btn-dark btn-round text-white" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.75s" href="#">Get Started Now<i class="fas fa-arrow-right pl-3"></i></a>
            </div>
        </div>
        </div>
    </div>
    <div class="swiper-slide align-items-center d-flex responsive-overlap-md bg-overlay-black-30" style="background-image:url({{ asset('frontend/images/slider/slider22.jpg') }}); background-size: cover; background-position: center center;">
        <div class="swipeinner container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-11 text-center">
            <h1 data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.25s">Best Solution To Run Your Project Faster</h1>
            <h6 data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.5s">We create new technologies for your business thanks to our wonderful team of professionals.</h6>
            <a class="btn btn-dark btn-round text-white" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.75s" href="#">View Our Solution<i class="fas fa-arrow-right pl-3"></i></a>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="swiper-button-prev"><i class="fas fa-arrow-left icon-btn"></i></div>
    <div class="swiper-button-next"><i class="fas fa-arrow-right icon-btn"></i></div>
</div>
</section>
<!--=================================
banner -->

<!--=================================
client-logo -->
<section class="mt-n5 z-index-9 position-relative">
<div class="container">
    <div class="row">
    <div class="col-sm-12">
        <div class="our-clients our-clients-style-02 bg-advenith">
        <div class="client-title pl-4">
            <h5 class="text-white">Our Technologies</h5>
            <div class="svg-item">
            </div>
        </div>
        <div class="brand-logo pl-4">
            <div class="owl-carousel testimonial-center owl-nav-bottom-center" data-nav-arrow="false" data-items="5" data-md-items="4" data-sm-items="4" data-xs-items="3" data-xx-items="2" data-space="40" data-autoheight="true">
            <div class="item">
                <img class="img-fluid center-block mx-auto" src="{{ asset('frontend/images/client-logo/light/html.svg') }}" alt="HTML" title="HTML">
            </div>
            <div class="item">
                <img class="img-fluid center-block mx-auto" src="{{ asset('frontend/images/client-logo/light/css-3.svg') }}" alt="CSS" title="CSS">
            </div>
            <div class="item">
                <img class="img-fluid center-block mx-auto" src="{{ asset('frontend/images/client-logo/light/javascript-1.svg') }}" alt="JAVASCRIPT" title="JAVASCRIPT">
            </div>
            <div class="item">
                <img class="img-fluid center-block mx-auto" src="{{ asset('frontend/images/client-logo/light/jquery-2.svg') }}" alt="JQUERY" title="JQUERY">
            </div>
            <div class="item">
                <img class="img-fluid center-block mx-auto" src="{{ asset('frontend/images/client-logo/light/php.svg') }}" alt="PHP" title="PHP">
            </div>
            <div class="item">
                <img class="img-fluid center-block mx-auto" src="{{ asset('frontend/images/client-logo/light/laravel.svg') }}" alt="LARAVEL" title="LARAVEL">
            </div>
            <div class="item">
                <img class="img-fluid center-block mx-auto" src="{{ asset('frontend/images/client-logo/light/prestashop.svg') }}" alt="PRESTASHOP" title="PRESTASHOP">
            </div>
            <div class="item">
                <img class="img-fluid center-block mx-auto" src="{{ asset('frontend/images/client-logo/light/react-2.svg') }}" alt="REACT" title="REACT">
            </div>
            <div class="item">
                <img class="img-fluid center-block mx-auto" src="{{ asset('frontend/images/client-logo/light/angular-icon-1.svg') }}" alt="ANGULAR" title="ANGULAR">
            </div>
            <div class="item">
                <img class="img-fluid center-block mx-auto" src="{{ asset('frontend/images/client-logo/light/wordpress-blue.svg') }}" alt="WORDPRESS" title="WORDPRESS">
            </div>
            </div>
        </div>
        <div class="client-btn">
            <a href="#" class="btn btn-primary-round btn-round text-white">Learn More<i class="fas fa-arrow-right pl-3"></i></a>
        </div>
        </div>
    </div>
    </div>
</div>
</section>
<!--=================================
client-logo  -->

<!--=================================
Company Category -->
<section class="space-ptb">
<div class="container">
    <div class="row justify-content-center">
    <div class="col-xl-9 col-lg-10">
        <div class="section-title text-center">
        <h2>We Do Everything.</h2>
        <p>You may be interested in what we can offer you. More services you can find below. We do everything at a high level.</p>
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6 col-lg-3 mb-sm-5 mb-4">
        <div class="category-box category-box-style-02 text-center active">
        <div class="category-icon">
            <i class="flaticon-monitor"></i>
            <h5 class="category-title mb-0">Web Development</h5>
        </div>
        <ul class="category-list">
            <li><a href="#">E-commerce strategy</a></li>
            <li><a href="#">Custom design</a></li>
            <li><a href="#">Front-End development</a></li>
            <li><a href="#">Business intelligence</a></li>
        </ul>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-sm-5 mb-4">
        <div class="category-box category-box-style-02 text-center active">
        <div class="category-icon">
            <i class="flaticon-mobile-phone"></i>
            <h5 class="category-title mb-0">App Development</h5>
        </div>
        <ul class="category-list">
            <li><a href="#">iOS</a></li>
            <li><a href="#">Android</a></li>
            <li><a href="#">Hybrid platform</a></li>
            <li><a href="#">User testing</a></li>
        </ul>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-sm-5 mb-4">
        <div class="category-box category-box-style-02 text-center active">
        <div class="category-icon">
            <i class="flaticon-design"></i>
            <h5 class="category-title mb-0">Prestashop Websites</h5>
        </div>
        <ul class="category-list">
            <li><a href="#">Develop</a></li>
            <li><a href="#">Optimize</a></li>
            <li><a href="#">Maintain a website</a></li>
            <li><a href="#">Cost-effective websites</a></li>
        </ul>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 mb-sm-5 mb-4">
        <div class="category-box category-box-style-02 text-center active">
        <div class="category-icon">
            <i class="flaticon-monitor-1"></i>
            <h5 class="category-title mb-0">Website Designing</h5>
        </div>
        <ul class="category-list">
            <li><a href="#">Collaborative design process</a></li>
            <li><a href="#">Easy to use CMS</a></li>
            <li><a href="#">Built-in SEO best practices</a></li>
            <li><a href="#">Responsive Web Design</a></li>
        </ul>
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-12 d-md-flex justify-content-center align-items-center">
        <p class="mb-3 mb-md-0 mx-0 mx-md-3">To know about the latest technologies that are updating faster</p>
        <a href="#" class="btn btn-primary-round btn-round mx-0 mx-md-3">Learn More<i class="fas fa-arrow-right pl-3"></i></a>
    </div>
    </div>
</div>
</section>
<!--=================================
Company Category -->

<!--=================================
Case Study -->
<section class="space-ptb bg-dark-half-lg">
<div class="container">
    <div class="row justify-content-center">
    <div class="col-xl-9 col-lg-10">
        <div class="section-title text-center">
        <h2 class="text-white"><span class="text-primary">What's next?</span> Our Best Services</h2>
        <p class="lead text-white">Better Online Presence. Better Branding. Better Profits.</p>
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6 col-lg-4 order-lg-1 order-1">
        <div class="case-study">
        <div class="case-study-img case-study-lg" style="background-image: url({{ asset('frontend/images/project/001.jpg') }});">
        </div>
        <div class="case-study-info">
            <a class="case-study-title font-weight-bold" href="#">Website Design</a>
            <p>Your vision, our design. To give your customers the best experiences of your website, our web design experts ensure that you can take your business to new heights.</p>
            <a href="#" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-4 order-lg-2 order-3">
        <div class="row">
        <div class="col-sm-6 col-lg-12">
            <div class="case-study">
            <div class="case-study-img" style="background-image: url({{ asset('frontend/images/project/002.jpg') }});">
            </div>
            <div class="case-study-info">
                <a class="case-study-title font-weight-bold" href="#">Dynamic Web Application</a>
                <p>A business like yours requires a site that works in real-time.</p>
                <a href="#" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-12">
            <div class="case-study">
            <div class="case-study-img" style="background-image: url({{ asset('frontend/images/project/003.jpg') }});">
            </div>
            <div class="case-study-info">
                <a class="case-study-title" href="#">E-Commerce Solutions</a>
                <p>Selling something online has never been easier.</p>
                <a href="#" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 order-lg-3 order-2">
        <div class="case-study">
        <div class="case-study-img case-study-lg" style="background-image: url({{ asset('frontend/images/project/004.jpg') }});">
        </div>
        <div class="case-study-info">
            <a class="case-study-title font-weight-bold" href="#">Mobile Application Development</a>
            <p>Today, a website without an app is like a bottle without water. With most of today’s generation relying on their smartphones for all their day-to-day needs.</p>
            <a href="#" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-12 d-flex justify-content-center mt-0 mt-md-4">
        <a href="#" class="btn btn-primary-round btn-round mx-3">Learn More<i class="fas fa-arrow-right pl-3"></i></a>
    </div>
    </div>
</div>
</section>
<!--=================================
Case Study -->

<!--=================================
Tab -->
<section class="space-pb">
<div class="container">
    <div class="row justify-content-center pb-4 pb-md-5">
    <div class="col-lg-10">
        <div class="d-md-flex align-items-center">
        <div class="mr-4">
            <p class="mb-0">Established in</p>
            <h3 class="display-3 font-weight-bold text-primary mb-0">2017</h3>
        </div>
        <div class="mr-3">
            <h2 class="mb-0">Take Your Business Online.</h2>
        </div>
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-3">
        <div class="d-flex h-100">
        <div class="nav flex-column nav-pills w-100 align-self-lg-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link" id="mission-and-vision-tab" data-toggle="pill" href="#mission-and-vision" role="tab" aria-controls="mission-and-vision" aria-selected="true"><span class="data-hover" data-title="Mission and vision">Mission and vision</span></a>
            <a class="nav-link active" id="our-challenges-tab" data-toggle="pill" href="#our-challenges" role="tab" aria-controls="our-challenges" aria-selected="false"><span class="data-hover" data-title="Our challenges">Our challenges</span></a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#design-thinking" role="tab" aria-controls="design-thinking" aria-selected="false"><span class="data-hover" data-title="Design thinking">Design thinking</span></a>
            <a class="nav-link" id="meet-the-our-team-tab" data-toggle="pill" href="#meet-the-our-team" role="tab" aria-controls="meet-the-our-team" aria-selected="false"><span class="data-hover" data-title="Meet the our team">Meet the our team</span></a>
            <a class="nav-link" id="careers-with-us-tab" data-toggle="pill" href="#careers-with-us" role="tab" aria-controls="careers-with-us" aria-selected="false"><span class="data-hover" data-title="Careers with us">Careers with us</span></a>
        </div>
        </div>
    </div>
    <div class="col-md-9 mt-3 mt-md-0">
        <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade" id="mission-and-vision" role="tabpanel" aria-labelledby="mission-and-vision-tab">
            <div class="row">
            <div class="col-sm-5 align-self-lg-center mb-4 mb-sm-0">
                <img class="img-fluid rounded" src="{{ asset('frontend/images/about/001.jpg') }}" alt="">
            </div>
            <div class="col-sm-7 align-self-start align-self-lg-center pl-md-0 pl-lg-5">
                <h4><i class="flaticon-target text-primary mr-2"></i> Our Mission</h4>
                <p class="mb-4">To make a positive powerful impact in digital world.  Our mission is to be the industry's premier service provider company concentrated on fulfilling the maximum to our clients. </p>
                <h4><i class="flaticon-eye text-primary mr-2"></i> Our Vision</h4>
                <p class="mb-4">Bringing the world close to automation and digitalization. Our Vision is to be a top Web Design company in the IT sector and progress in our current position in the market. </p>
                <p class="font-weight-normal text-muted mt-4">We are always happy to assist you with your goals - from the simplest static site to complex eCommerce applications. Our Vision and Mission are both encouraging our team to accomplish the goal. We recognize the clients' requirements, analyze them, and provide the best solutions. We satisfy our clients by our services and implements it with more capable software solution approaches.</p>
            </div>
            </div>
        </div>
        <div class="tab-pane  fade show active" id="our-challenges" role="tabpanel" aria-labelledby="our-challenges-tab">
            <div class="row">
            <div class="col-sm-5 align-self-lg-center mb-4 mb-sm-0">
                <img class="img-fluid rounded" src="{{ asset('frontend/images/about/002.jpg') }}" alt="">
            </div>
            <div class="col-sm-7 align-self-start align-self-lg-center pl-md-0 pl-lg-5">
                <h4 class="mb-4 text-dark">“We are regarded as industry leaders in digital strategy and solutions, focused solely on delivering great user experiences”</h4>
                <p class="d-flex align-items-center mb-4">
                <span class="font-weight-bold text-dark mr-2">Advenith Technology</span> -
                <label class="ml-2 mb-0">Gurugram, Haryana</label>
                </p>
                <p class="mb-4">NEED to know how technology can bring you value? Never stop looking for better solutions to consult us. We design, develop and manage web-based enterprise solutions and mobile applications. Advenith Technology can make your business perform better, compete better, and generate more money.</p>
                <a href="#" class="btn btn-primary-round btn-round">Learn More<i class="fas fa-arrow-right pl-3"></i></a>
            </div>
            </div>
        </div>
        <div class="tab-pane fade" id="design-thinking" role="tabpanel">
            <div class="row">
            <div class="col-sm-5 align-self-lg-center mb-4 mb-sm-0">
                <img class="img-fluid rounded" src="{{ asset('frontend/images/about/003.jpg') }}" alt="">
            </div>
            <div class="col-sm-7 align-self-start align-self-lg-center pl-md-0 pl-lg-5">
                <h4 class="text-dark">Design Thinking</h4>
                <p>Our process ranges from discussions, approvals, feedbacks, incorporating your vision for your website.</p>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <ul class="list list-unstyled">
                        <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Dynamic & Mobile Ready Website </span></li>
                        <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Convenient Navigation </span></li>
                        <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Performance Ready </span></li>
                        <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Analytics and the aftermath</span></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list list-unstyled">
                        <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Web Browsers Compatibility</span></li>
                        <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Sitemap and Architecture</span></li>
                        <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Website Planning, Website Content</span></li>
                        <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Website Construction and Testing</span></li>
                        </ul>
                    </div>
                </div>
                <div class="mt-4">
                <a class="btn btn-primary-round btn-round" href="#">Learn More</a>
                </div>
            </div>
            </div>
        </div>
        <div class="tab-pane fade" id="meet-the-our-team" role="tabpanel" aria-labelledby="meet-the-our-team-tab">
            <div class="row">
            <div class="col-sm-5 align-self-lg-center mb-4 mb-sm-0">
                <img class="img-fluid rounded" src="{{ asset('frontend/images/about/004.jpg') }}" alt="">
            </div>
            <div class="col-sm-7 align-self-start align-self-lg-center pl-md-0 pl-lg-5">
                <div class="row">
                <div class="col-12 mb-4">
                    <h4 class="text-dark">Meet our Team</h4>
                    <p>Our team is friendly, talkative, and fully reliable.</p>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-6 col-6">
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
                <div class="col-xl-4 col-md-4 col-sm-6 col-6">
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
                <div class="col-xl-4 col-md-4 col-sm-6 col-6">
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
                <div class="col-12 mt-4">
                    <a class="btn btn-primary-round btn-round" href="{{ route('teams') }}">View Our Team</a>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="tab-pane fade" id="careers-with-us" role="tabpanel" aria-labelledby="careers-with-us-tab">
            <div class="row">
            <div class="col-sm-5 align-self-lg-center mb-4 mb-sm-0">
                <img class="img-fluid rounded" src="{{ asset('frontend/images/about/005.jpg') }}" alt="">
            </div>
            <div class="col-sm-7 align-self-start align-self-lg-center pl-md-0 pl-lg-5">
                <h4 class="mb-2">Why Choose Us?</h4>
                <p class="mb-4">Having {{ Carbon\Carbon::createFromDate(2017, 01, 01)->diffInYears(Carbon\Carbon::now()) }} plus years of experience crossing excellent challenges, moving towards successful growth and stretching our services, we have covered all the industries and gained experience in dealing with local and global clients with custom requirements.</h5>
                <div class="row mb-4">
                <div class="col-md-6">
                    <ul class="list list-unstyled">
                    <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Creativity Unique Designers </span></li>
                    <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Outstanding technical expertise </span></li>
                    <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Deliver high-quality solutions </span></li>
                    <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Profound knowledge</span></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list list-unstyled">
                    <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Best-in-class web designs</span></li>
                    <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Combining strategizing skills</span></li>
                    <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Dealing with local and global clients</span></li>
                    <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Discover Explore More</span></li>
                    </ul>
                </div>
                </div>
                <a href="{{ route('careers') }}" class="btn btn-primary-round btn-round mt-2">View Available Positions<i class="fas fa-arrow-right pl-3"></i></a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</section>
<!--=================================
Tab -->


<!--=================================
Counter -->
<section class="bg-advenith py-5">
    <div class="container">
        <div class="row">
        <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
            <div class="counter">
            <div class="counter-icon">
                <i class="flaticon-emoji"></i>
            </div>
            <div class="counter-content">
                <span class="timer" data-to="390" data-speed="10000">390</span>
                <label>Happy Clients</label>
            </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
            <div class="counter">
            <div class="counter-icon">
                <i class="flaticon-trophy"></i>
            </div>
            <div class="counter-content align-self-center">
                <span class="timer" data-to="11" data-speed="10000">11</span>
                <label>Year Of Experience</label>
            </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
            <div class="counter">
            <div class="counter-icon">
                <i class="flaticon-strong"></i>
            </div>
            <div class="counter-content">
                <span class="timer" data-to="352" data-speed="10000">352</span>
                <label>Finished Projects</label>
            </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="counter">
            <div class="counter-icon">
                <i class="flaticon-icon-149196"></i>
            </div>
            <div class="counter-content">
                <span class="timer" data-to="550" data-speed="10000">550</span>
                <label>Media Posts</label>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <!--=================================
    Counter -->

<!--=================================
Service -->
<section class="space-ptb bg-light position-relative">
<div class="container">
    <div class="row">
    <div class="col-lg-4">
        <div class="section-title is-sticky">
        <h2>Highly Motivated Team focused on sucess.</h2>
        <p class="mb-4">When it comes to website design, we work with newest technologies, frameworks and programming languages. Our experienced team of programmers ensure 100% client satisfaction.</p>
        <a href="#" class="btn btn-primary-round btn-round">Learn More<i class="fas fa-arrow-right pl-3"></i></a>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="row">
        <div class="col-sm-6">
            <div class="feature-info feature-info-style-01">
            <div class="feature-info-icon">
                <i class="flaticon-data"></i>
            </div>
            <div class="feature-info-content">
                <h5 class="mb-3 feature-info-title">Professional and Creative Team</h5>
                <p class="mb-0">We define your competition and target audience. Discover what is working in your online industry, then design accordingly.</p>
                
            </div>
            </div>
            <div class="feature-info feature-info-style-01 mt-4 mt-lg-5">
            <div class="feature-info-icon">
                <i class="flaticon-icon-149196"></i>
            </div>
            <div class="feature-info-content">
                <h5 class="mb-3 feature-info-title">Project Management System with full Plan</h5>
                <p class="mb-0">Color scheme, layout, sitemap, and style. We will bring your brand to life with a one of a kind masterpiece, built just for you.</p>
                
            </div>
            </div>
            <div class="feature-info feature-info-style-01 mt-4 mt-lg-5">
            <div class="feature-info-icon">
                <i class="flaticon-design"></i>
            </div>
            <div class="feature-info-content">
                <h5 class="mb-3 feature-info-title">Timely Quality Control</h5>
                <p class="mb-0">We turn your ideas into a reality & our website is placed on a "development server" where you get to watch the whole process live.</p>
                
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="feature-info feature-info-style-01 mt-4 mt-lg-5">
            <div class="feature-info-icon">
                <i class="flaticon-author"></i>
            </div>
            <div class="feature-info-content">
                <h5 class="mb-3 feature-info-title">Personalized and Consultative Approach</h5>
                <p class="mb-0">This is where you go live, to the world. Design, marketing, and maintenance; we'll be at your side for the life of your site.</p>
                
            </div>
            </div>
            <div class="feature-info feature-info-style-01 mt-4 mt-lg-5">
            <div class="feature-info-icon">
                <i class="flaticon-chart"></i>
            </div>
            <div class="feature-info-content">
                <h5 class="mb-3 feature-info-title">Diversified Portfolio</h5>
                <p class="mb-0">To know your business and understand your needs. Execute the plan with advanced tools and techniques within the set time frame.</p>
                
            </div>
            </div>
            <div class="feature-info feature-info-style-01 mt-4 mt-lg-5">
            <div class="feature-info-icon">
                <i class="flaticon-group"></i>
            </div>
            <div class="feature-info-content">
                <h5 class="mb-3 feature-info-title">Cost Effective Solutions</h5>
                <p class="mb-0">Capture and analyse results from various sources to understand and improve. Take steps to optimize the inputs and improve the results continuously.</p>
                
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</section>
<!--=================================
Service -->
<!--=================================
Service -->
<section class="space-ptb bg-advenith dark-background category category-list-style-01 mb-5">
    <div class="container">
        <div class="row align-items-center pb-4 pb-md-5">
        <div class="col-lg-6">
            <h2 class="text-white mb-2 mb-lg-0">Our diverse portfolio is rich with a varitey of projects done in multiple industries.</h2>
        </div>
        <div class="col-lg-6">
            <p class="lead text-white mb-0">Our team has many years of experience as well as comprehensive know-how in on-line marketing and media communication.</p>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-6 col-lg-3">
            <ul class="category-list">
            <li><a href="#">Education</a></li>
            <li><a href="#">Health Care / Medical</a></li>
            <li><a href="#">Entertainment</a></li>
            <li><a href="#">Financial Services & Banking</a></li>
            </ul>
        </div>
        <div class="col-sm-6 col-lg-3 mt-4 mt-sm-0">
            <ul class="category-list">
            <li><a href="#">Business & Accounting</a></li>
            <li><a href="#">Travel</a></li>
            <li><a href="#">Transport & Logistics</a></li>
            <li><a href="#">Food & Restaurants</a></li>
            </ul>
        </div>
        <div class="col-sm-6 col-lg-3 mt-4 mt-lg-0">
            <ul class="category-list">
            <li><a href="#">Real Estate</a></li>
            <li><a href="#">Industry & Oil & Gas</a></li>
            <li><a href="#">On-Demand Solutions</a></li>
            <li><a href="#">Health Care</a></li>
            </ul>
        </div>
        <div class="col-sm-6 col-lg-3 mt-4 mt-lg-0">
            <ul class="category-list">
            <li><a href="#">Grocery & Retail Stores</a></li>
            <li><a href="#">Publishing</a></li>
            <li><a href="#">Industrial & Manufacturing</a></li>
            </ul>
        </div>
        </div>
        <div class="row mt-4 mt-md-5">
        <div class="col-12 d-md-flex justify-content-center align-items-center">
            <p class="mb-3 mb-md-0 mx-0 mx-md-3 text-white">Our diverse portfolio is rich with a varitey of projects done in multiple industries.</p>
            <a href="#" class="btn btn-primary-round text-white btn-round mx-0 mx-md-3">Browse Industries<i class="fas fa-arrow-right pl-3"></i></a>
        </div>
        </div>
    </div>
    </section>
    <!--=================================
    Service -->
@endsection
