@extends('layouts.frontend')

@section('content')
    <!--=================================
                    Header Inner -->
    <section class="header-inner header-inner-menu bg-overlay-black-50"
        style="background-image: url({{ asset('frontend/images/header-inner/003.jpg') }});">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="header-inner-title text-center">
                        <h1 class="text-white font-weight-normal">Jobs at Advenith</h1>
                        <p class="text-white mb-0">We just love what we do and that's why
                            we are good at it..!</p>
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
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="row no-gutters d-flex align-items-end mb-4 mb-sm-2">
                        <div class="col-sm-8 pr-sm-2 mb-4 mb-sm-0">
                            <img class="img-fluid border-radius" src="{{ asset('frontend/images/about/0002.jpg') }}" alt="">
                        </div>
                        <div class="col-sm-4">
                            <div class="counter counter-03 py-5">
                                <div class="counter-content">
                                    <span class="timer" data-to="352" data-speed="1000">352</span>
                                    <label>Projects Complete </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-6">
                            <img class="img-fluid border-radius" src="{{ asset('frontend/images/about/0001.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-xl-5">
                    <h2 class="mb-4">At Advenith, we believe in creating a culture of innovation, which reflects
                        in everything we do.</h2>
                    <p class="mb-4">Empower yourself with possibilities that will take you to heights and will
                        open to you new adventure of life.
                        Experience a vibrant work environment, brimming with new ideas, diverse people, and the innate drive
                        to excel.</p>
                    <ul class="list list-unstyled ckeck-list">
                        <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Success is
                                something of which we all want more</span></li>
                        <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Most people
                                believe that success is difficult</span></li>
                        <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>There are
                                basically six key areas to higher achievement</span></li>
                        <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Believing in
                                yourself and those around you</span></li>
                        <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Making a
                                decision to do something</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                      About -->

    <!--=================================
                      Category -->
    <section class="space-ptb bg-light">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <h2 class="mb-3 mb-lg-0">Why Advenith Technology?</h2>
                </div>
                <div class="col-lg-6 text-lg-right">
                    <a href="#" class="btn btn-white-round btn-round w-space">Let’s Get Started<i
                            class="fas fa-arrow-right pl-3"></i></a>
                </div>
            </div>
            <div class="row mt-4 mt-lg-5">
                <div class="col-lg-3 col-md-6 mb-4 mb-md-5 mb-lg-0">
                    <div class="feature-info feature-info-style-06">
                        <div class="feature-info-img">
                            <img class="img-fluid" src="{{ asset('frontend/images/feature-info/001.jpg') }}" alt="">
                        </div>
                        <div class="feature-info-number mb-0">
                            <span>01</span>
                            <h5 class="mb-0 ml-4 feature-info-title">Flexible Work Schedule</h5>
                        </div>
                        <p class="mt-4 mb-0">
                            Flexible working schedules allow employees to work some of the time and can lead to increase
                            productivity, reduced burnout, and can ultimately benefit companies a great deal.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-5 mb-lg-0">
                    <div class="feature-info feature-info-style-06">
                        <div class="feature-info-img">
                            <img class="img-fluid" src="{{ asset('frontend/images/feature-info/002.jpg') }}" alt="">
                        </div>
                        <div class="feature-info-number mb-0">
                            <span>02</span>
                            <h5 class="mb-0 ml-4 feature-info-title">Career Opportunities</h5>
                        </div>
                        <p class="mt-4 mb-0">Careers in Advenith Technology can be incredibly challenging and
                            rewarding. One of the most exciting things about these careers is that they offer
                            employee continuous opportunities for learning. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <div class="feature-info feature-info-style-06">
                        <div class="feature-info-img">
                            <img class="img-fluid" src="{{ asset('frontend/images/feature-info/003.jpg') }}" alt="">
                        </div>
                        <div class="feature-info-number mb-0">
                            <span>03</span>
                            <h5 class="mb-0 ml-4 feature-info-title">Healthy Work Culture</h5>
                        </div>
                        <p class="mt-4 mb-0">We spend our majority of working hours at work, we must feel comfortable
                            with our colleagues, customers and executives.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-info feature-info-style-06">
                        <div class="feature-info-img">
                            <img class="img-fluid" src="{{ asset('frontend/images/feature-info/004.jpg') }}" alt="">
                        </div>
                        <div class="feature-info-number mb-0">
                            <span>04</span>
                            <h5 class="mb-0 ml-4 feature-info-title">Global & Responsible</h5>
                        </div>
                        <p class="mt-4 mb-0">We will be global in our thinking and our actions. We are energized by the
                            deep connectedness between people, ideas, communities and the environment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                      Category -->

    <!--=================================
                      Career Opportunities -->
    <section class="space-ptb">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9">
                    <div class="section-title text-center">
                        <h2>Current career opportunities at Advenith</h2>
                        <p>Let's build great things together. Work with world-class companies and great teammates to launch
                            products you'll give a damn about.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9">
                    <div class="accordion" id="career-opportunities">
                        <div class="card">
                            <div class="accordion-icon card-header" id="headingOne">
                                <h4 class="mb-0">
                                    <button class="btn" type="button" data-toggle="collapse"
                                        data-target="#security-manager" aria-expanded="true"
                                        aria-controls="security-manager">Laravel Developer</button>
                                </h4>
                            </div>
                            <div id="security-manager" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#career-opportunities">
                                <div class="card-body">
                                    <p class="mb-4">The ideal candidate is a highly resourceful and innovative
                                        developer with extensive experience
                                        in the layout, design and coding of websites specifically in PHP format. You must
                                        also possess a
                                        strong knowledge of web application development using PHP programming language and
                                        MySQL Server
                                        databases.</p>
                                        <p><span class="badge badge-primary">Immediate Joiner</span> <span class="badge badge-success">4-5 Opening</span></p>
                                    <h5>Job Description</h5>
                                    <ul class="list list-unstyled ckeck-list mb-4 mb-md-5">
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>2+years’ experience in
                                                Laravel PHP & Mysql</span></li>
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>Create REST API &
                                                GraphQL API</span></li>
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>Good Database design
                                                Knowledge</span></li>
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>Strong problem solving
                                                & logical thinking skill.</span></li>
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>Well-versed with
                                                scripts/tools along with PHP like HTML, CSS, JavaScript, JQuery, AJAX,
                                                Bootstrap, Blade, GIT</span></li>
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>Debugging Code And
                                                Fixing Bugs</span></li>
                                    </ul>
                                    <h5>Desired Skills:</h5>
                                    <ul class="list list-unstyled ckeck-list mb-4 mb-md-5">
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>HTML</span></li>
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>CSS</span></li>
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>JavaScript</span>
                                        </li>
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>jQuery</span></li>
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>PHP</span></li>
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>MySQL</span></li>
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>Laravel</span></li>
                                    </ul>
                                    {{-- <a href="#" class="btn btn-light-round btn-round w-space">Let’s Get Started<i
                                            class="fas fa-arrow-right pl-3"></i></a> --}}
                                    <p>Send Resume at : <a href="mailto:hr@advenith.com">hr@advenith.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="accordion-icon card-header" id="headingTwo">
                                <h4 class="mb-0">
                                    <button class="btn collapsed" type="button" data-toggle="collapse"
                                        data-target="#business-partner" aria-expanded="false"
                                        aria-controls="business-partner">React.js Developer</button>
                                </h4>
                            </div>
                            <div id="business-partner" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#career-opportunities">
                                <div class="card-body">
                                    <p class="mb-4">We are looking for a React.Js Developer with 4 or above years of experience, who have designed and developed advanced applications in B2C domain, 
                                        hence the candidate must reach the required criteria to apply for the position.</p>
                                    <p><span class="badge badge-primary">Immediate Joiner</span> <span class="badge badge-success">2-3 Opening</span></p>
                                    <h5>Responsibilities:</h5>
                                    <ul class="list list-unstyled ckeck-list mb-4 mb-md-5">
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>Design and develop
                                                highly responsive web-based user interface using React.js</span></li>
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>Building reusable
                                                components and front-end libraries for future use</span></li>
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>Translate designs and
                                                wireframes into high-quality code</span>
                                        </li>
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>Involvement from
                                                conception to completion on projects</span></li>
                                    </ul>
                                    <h5>Requirements:</h5>
                                    <ul class="list list-unstyled ckeck-list mb-4 mb-md-5">
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>4-5 years of working
                                                exp. as React.js developer</span></li>
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>Proficiency in
                                                JavaScript, CSS, HTML, jQuery</span></li>
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>Knowledge of React
                                                tools such as React.js, Redux</span>
                                        </li>
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>Excellent
                                                troubleshooting skills</span></li>
                                    </ul>
                                    <h5>Desired Skills:</h5>
                                    <ul class="list list-unstyled ckeck-list mb-4 mb-md-5">
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>HTML</span></li>
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>CSS</span></li>
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>JavaScript</span>
                                        </li>
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>jQuery</span></li>
                                        <li class="d-flex"><i
                                                class="fas fa-check pr-2 pt-1 text-primary"></i><span>React.js</span></li>
                                    </ul>
                                    {{-- <a href="#" class="btn btn-light-round btn-round w-space">Let’s Get Started<i
                                            class="fas fa-arrow-right pl-3"></i></a> --}}
                                    <p>Send Resume at : <a href="mailto:hr@advenith.com">hr@advenith.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="accordion-icon card-header" id="headingThree">
                              <h4 class="mb-0">
                              <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#outreach-representative" aria-expanded="false" aria-controls="outreach-representative">Human Resources (HR) Executive</button>
                              </h4>
                            </div>
                            <div id="outreach-representative" class="collapse" aria-labelledby="headingThree" data-parent="#career-opportunities">
                              <div class="card-body">
                                <p class="mb-4">Advenith is hiring for the position of a Human Resources Manager, 
                                    which is both a strategic and a hands-on role aimed at providing full-cycle human resource 
                                    support across multiple teams. This person will be responsible for executing our people initiatives 
                                    and driving HR functional excellence as well as process improvements</p>
                                <p><span class="badge badge-primary">Immediate Joiner</span></p>
                                <h5>What are you going to do?</h5>
                                <ul class="list list-unstyled ckeck-list mb-4 mb-md-5">
                                  <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>The person would be responsible for managing end to end recruitment.</span></li>
                                  <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Should have knowledge of sourcing through various channels.</span></li>
                                  <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>The person would be responsible for managing the sourcing for various profiles till on-boarding of the candidates.</span></li>
                                  <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>The person would be responsible of handling multiple vendors and be a liaison between organization and vendor/client.</span></li>
                                  <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Preparing trackers and dashboards on weekly/daily basis.</span></li>
                                  <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Background verification of new joinees.</span></li>
                                </ul>
                                <h5>You need to have:</h5>
                                <ul class="list list-unstyled ckeck-list mb-4 mb-md-5">
                                  <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Minimum 1+ years of relevant experience.</span></li>
                                  <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Must have exposure to end to end recruitment and client/vendor handling.</span></li>
                                  <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Experience in startup/corporate and operations environments.</span></li>
                                  <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Ability to work independently as well as part of a HR team.</span></li>
                                  <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Passion for HR and innovative HR solutions.</span></li>
                                  <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Candidate should have excellent communication & interpersonal skills.</span></li>
                                  <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Bachelor’s Degree / Master's degree or MBA.</span></li>
                                  <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Adaptability, ability to learn faster, Independent, responsible and diligent.</span></li>
                                  <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Strong communication skills.</span></li>
                                </ul>
                                {{-- <a href="#" class="btn btn-light-round btn-round w-space">Let’s Get Started<i class="fas fa-arrow-right pl-3"></i></a> --}}
                                <p>Send Resume at : <a href="mailto:hr@advenith.com">hr@advenith.com</a></p>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                      Career Opportunities -->
@endsection

@section('js')
    <script src="{{ asset('frontend/js/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jarallax/jarallax-video.min.js') }}"></script>
    <script src="{{ asset('frontend/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/horizontal-timeline/horizontal-timeline.js') }}"></script>
@endsection
