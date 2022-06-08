@extends('layouts.frontend')
@section('content')
<!--=================================
Header Inner -->
<section class="header-inner header-inner-menu bg-overlay-black-50" style="background-image: url({{ asset('frontend/images/header-inner/003.jpg') }});">
<div class="container">
<div class="row d-flex justify-content-center">
<div class="col-md-8">
    <div class="header-inner-title text-center">
    <h1 class="text-white font-weight-normal">Careers</h1>
    <p class="text-white mb-0">Give yourself the power of responsibility. Remind yourself the only thing stopping you is yourself.</p>
    </div>
</div>
</div>
</div>
<div class="header-inner-nav">
<div class="container">
<div class="row">
    <div class="col-12 d-flex justify-content-center">
    <ul class="nav">
        <li class="nav-item"><a class="nav-link" href="about-us.html">About us</a></li>
        <li class="nav-item"><a class="nav-link active" href="careers.html">Careers</a></li>
        <li class="nav-item"><a class="nav-link" href="how-we-work.html">How we work</a></li>
        <li class="nav-item"><a class="nav-link" href="our-team.html">Our team</a></li>
        <li class="nav-item"><a class="nav-link" href="mission-vision.html">Mission and vision</a></li>
        <li class="nav-item"><a class="nav-link" href="our-value.html">Our values</a></li>
    </ul>
    </div>
</div>
</div>
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
        <img class="img-fluid border-radius" src="{{ asset('frontend/images/about/08.jpg') }}" alt="">
    </div>
    <div class="col-sm-4">
        <div class="counter counter-03 py-5">
        <div class="counter-content">
            <span class="timer" data-to="491" data-speed="1000">358</span>
            <label>Projects Complete </label>
        </div>
        </div>
    </div>
    </div>
    <div class="row d-flex justify-content-center">
    <div class="col-sm-6">
        <img class="img-fluid border-radius" src="{{ asset('frontend/images/about/09.jpg') }}" alt="">
    </div>
    </div>
</div>
<div class="col-lg-6 pl-xl-5">
    <h2 class="mb-4">We enable constant enterprise transformation at speed and scale.</h2>
    <p class="mb-4">Success isn’t really that difficult. There is a significant portion of the population here in North America, that actually want and need success to be hard! Why? So they then have a built-in excuse when things don’t go their way! Pretty sad situation, to say the least.</p>
    <ul class="list list-unstyled ckeck-list">
    <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Success is something of which we all want more</span></li>
    <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Most people believe that success is difficult</span></li>
    <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>There are basically six key areas to higher achievement</span></li>
    <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Believing in yourself and those around you</span></li>
    <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Making a decision to do something</span></li>
    </ul>
</div>
</div>
</div>
</section>
<!--=================================
About -->

<!--=================================
portfolio -->
<section class="space-pb popup-gallery overflow-hidden">
<div class="container-fluid">
<div class="row d-flex align-items-end">
<div class="col-md-6 col-lg-3 mb-4 mb-lg-3">
    <a class="portfolio-img" href="{{ asset('frontend/images/gallery/01.jpg') }}"><img class="img-fluid" src="{{ asset('frontend/images/gallery/01.jpg') }}" alt=""></a>
</div>
<div class="col-md-6 col-lg-3 mb-4 mb-lg-3">
    <a class="portfolio-img" href="{{ asset('frontend/images/gallery/02.jpg') }}"><img class="img-fluid w-100" src="{{ asset('frontend/images/gallery/02.jpg') }}" alt=""></a>
</div>
<div class="col-md-6 col-lg-3 mb-4 mb-lg-3">
    <a class="portfolio-img" href="{{ asset('frontend/images/gallery/03.jpg') }}"><img class="img-fluid" src="{{ asset('frontend/images/gallery/03.jpg') }}" alt=""></a>
</div>
<div class="col-md-6 col-lg-3 mb-4 mb-lg-3">
    <a class="portfolio-img" href="{{ asset('frontend/images/gallery/04.jpg') }}"><img class="img-fluid" src="{{ asset('frontend/images/gallery/04.jpg') }}" alt=""></a>
</div>
</div>
<div class="row">
<div class="col-md-6 col-lg-3 mt-0 mt-lg-3">
    <a class="portfolio-img" href="{{ asset('frontend/images/gallery/05.jpg') }}"><img class="img-fluid" src="{{ asset('frontend/images/gallery/05.jpg') }}" alt=""></a>
</div>
<div class="col-md-6 col-lg-3 mt-4 mt-lg-3">
    <a class="portfolio-img" href="{{ asset('frontend/images/gallery/06.jpg') }}"><img class="img-fluid w-100" src="{{ asset('frontend/images/gallery/06.jpg') }}" alt=""></a>
</div>
<div class="col-md-6 col-lg-3 mt-4 mt-lg-3">
    <a class="portfolio-img" href="{{ asset('frontend/images/gallery/07.jpg') }}"><img class="img-fluid" src="{{ asset('frontend/images/gallery/07.jpg') }}" alt=""></a>
</div>
<div class="col-md-6 col-lg-3 mt-4 mt-lg-3">
    <a class="portfolio-img" href="{{ asset('frontend/images/gallery/08.jpg') }}"><img class="img-fluid" src="{{ asset('frontend/images/gallery/08.jpg') }}" alt=""></a>
</div>
</div>
</div>
</section>
<!--=================================
portfolio -->

<!--=================================
Category -->
<section class="space-ptb bg-light">
<div class="container">
<div class="row align-items-center justify-content-center">
<div class="col-lg-6">
    <h2 class="mb-3 mb-lg-0">Four reasons why you should choose our service</h2>
</div>
<div class="col-lg-6 text-lg-right">
    <a href="#" class="btn btn-white-round btn-round w-space">Let’s Get Started<i class="fas fa-arrow-right pl-3"></i></a>
</div>
</div>
<div class="row mt-4 mt-lg-5">
<div class="col-lg-3 col-md-6 mb-4 mb-md-5 mb-lg-0">
    <div class="feature-info feature-info-style-06">
    <div class="feature-info-img">
        <img class="img-fluid" src="{{ asset('frontend/images/feature-info/01.jpg') }}" alt="">
    </div>
    <div class="feature-info-number mb-0">
        <span>01</span>
        <h5 class="mb-0 ml-4 feature-info-title">We know your business already</h5>
    </div>
    <p class="mt-4 mb-0">The sad thing is the majority of people have no clue about what they truly want. They have no clarity.</p>
    </div>
</div>
<div class="col-lg-3 col-md-6 mb-4 mb-md-5 mb-lg-0">
    <div class="feature-info feature-info-style-06">
    <div class="feature-info-img">
        <img class="img-fluid" src="{{ asset('frontend/images/feature-info/02.jpg') }}" alt="">
    </div>
    <div class="feature-info-number mb-0">
        <span>02</span>
        <h5 class="mb-0 ml-4 feature-info-title">Building context – not just code</h5>
    </div>
    <p class="mt-4 mb-0">What steps are required to get you to the goals? Make the plan as detailed as possible.</p>
    </div>
</div>
<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
    <div class="feature-info feature-info-style-06">
    <div class="feature-info-img">
        <img class="img-fluid" src="{{ asset('frontend/images/feature-info/03.jpg') }}" alt="">
    </div>
    <div class="feature-info-number mb-0">
        <span>03</span>
        <h5 class="mb-0 ml-4 feature-info-title">We are responsive and flexible</h5>
    </div>
    <p class="mt-4 mb-0">This is perhaps the single biggest obstacle that all of us must overcome in order to be successful.</p>
    </div>
</div>
<div class="col-lg-3 col-md-6">
    <div class="feature-info feature-info-style-06">
    <div class="feature-info-img">
        <img class="img-fluid" src="{{ asset('frontend/images/feature-info/04.jpg') }}" alt="">
    </div>
    <div class="feature-info-number mb-0">
        <span>04</span>
        <h5 class="mb-0 ml-4 feature-info-title">10 years experience – and counting</h5>
    </div>
    <p class="mt-4 mb-0">To make these virtues a habit, Franklin can up with a method to grade himself on his daily actions.</p>
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
    <h2>Current career opportunities at Hi-soft</h2>
    <p>Positive pleasure-oriented goals are much more powerful motivators than negative fear-based ones.</p>
    </div>
</div>
</div>
<div class="row d-flex justify-content-center">
<div class="col-lg-9">
    <div class="accordion" id="career-opportunities">
    <div class="card">
        <div class="accordion-icon card-header" id="headingOne">
        <h4 class="mb-0">
        <button class="btn" type="button" data-toggle="collapse" data-target="#security-manager" aria-expanded="true" aria-controls="security-manager">IT & Security Manager</button>
        </h4>
        </div>
        <div id="security-manager" class="collapse show" aria-labelledby="headingOne" data-parent="#career-opportunities">
        <div class="card-body">
            <p class="mb-4">From two to five he worked at his trade. The rest of the evening until 10 he spent in music, or diversion of some sort. This time is used also to put things in their places. In the last thing before retiring was examination of the day. At the age of 79, he ascribed his health to temperance; the acquisition of misfortune to industry and frugality; the confidence of his country to sincerity and justice.</p>
            <ul class="list list-unstyled ckeck-list mb-4 mb-md-5">
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Success is something of which we all want more</span></li>
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Most people believe that success is difficult</span></li>
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>There are basically six key areas to higher achievement</span></li>
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Believing in yourself and those around you</span></li>
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Making a decision to do something</span></li>
            </ul>
            <a href="#" class="btn btn-light-round btn-round w-space">Let’s Get Started<i class="fas fa-arrow-right pl-3"></i></a>
        </div>
        </div>
    </div>
    <div class="card">
        <div class="accordion-icon card-header" id="headingTwo">
        <h4 class="mb-0">
        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#business-partner" aria-expanded="false" aria-controls="business-partner">Junior HR Business Partner</button>
        </h4>
        </div>
        <div id="business-partner" class="collapse" aria-labelledby="headingTwo" data-parent="#career-opportunities">
        <div class="card-body">
            <p class="mb-4">There are basically six key areas to higher achievement. Some people will tell you there are four while others may tell you there are eight. One thing for certain though, is that irrespective of the number of steps the experts talk about, they all originate from the same roots.</p>
            <ul class="list list-unstyled ckeck-list mb-4 mb-md-5">
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Making the decisio</span></li>
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Clarity – developing the Vision</span></li>
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Commitment – understanding the price and having the willingness to pay that price</span></li>
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Belief – believing in yourself and those around you</span></li>
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Taking action – practice Ready, Fire, Aim…</span></li>
            </ul>
            <a href="#" class="btn btn-light-round btn-round w-space">Let’s Get Started<i class="fas fa-arrow-right pl-3"></i></a>
        </div>
        </div>
    </div>
    <div class="card">
        <div class="accordion-icon card-header" id="headingThree">
        <h4 class="mb-0">
        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#outreach-representative" aria-expanded="false" aria-controls="outreach-representative">Junior Outreach Representative</button>
        </h4>
        </div>
        <div id="outreach-representative" class="collapse" aria-labelledby="headingThree" data-parent="#career-opportunities">
        <div class="card-body">
            <p class="mb-4">Focus is having the unwavering attention to complete what you set out to do. There are a million distractions in every facet of our lives. Telephones and e-mail, clients and managers, spouses and kids, TV, newspapers and radio – the distractions are everywhere and endless. Everyone wants a piece of us and the result can be totally overwhelming.</p>
            <ul class="list list-unstyled ckeck-list mb-4 mb-md-5">
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>So, how can we stay on course with all the distractions</span></li>
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>The best way is to develop and follow a plan. Start with your goals</span></li>
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>What steps are required to get you to the goals? Make the plan as detailed as possible.</span></li>
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Try to visualize and then plan for, every possible setback.</span></li>
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Commit the plan to paper and then keep it with you at all times.</span></li>
            </ul>
            <a href="#" class="btn btn-light-round btn-round w-space">Let’s Get Started<i class="fas fa-arrow-right pl-3"></i></a>
        </div>
        </div>
    </div>
    <div class="card">
        <div class="accordion-icon card-header" id="headingFour">
        <h4 class="mb-0">
        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#salesforce-developer" aria-expanded="false" aria-controls="salesforce-developer">Senior Salesforce Developer</button>
        </h4>
        </div>
        <div id="salesforce-developer" class="collapse" aria-labelledby="headingFour" data-parent="#career-opportunities">
        <div class="card-body">
            <p class="mb-4">Along with your plans, you should consider developing an action orientation that will keep you motivated to move forward at all times. This requires a little self-discipline, but is a crucial component to achievement of any kind. Before starting any new activity, ask yourself if that activity will move you closer to your goals.</p>
            <ul class="list list-unstyled ckeck-list mb-4 mb-md-5">
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>If the answer is no, you may want to reconsider doing it</span></li>
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>I coach my clients to practice the 3 D’s – Defer, Delegate or Delete</span></li>
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Can the particular activity be done later? Defer it!</span></li>
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Commitment is something that comes from understanding that everything</span></li>
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>This is important because nobody wants to put significant effort into</span></li>
            </ul>
            <a href="#" class="btn btn-light-round btn-round w-space">Let’s Get Started<i class="fas fa-arrow-right pl-3"></i></a>
        </div>
        </div>
    </div>
    <div class="card">
        <div class="accordion-icon card-header" id="headingFive">
        <h4 class="mb-0">
        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#development-manager" aria-expanded="false" aria-controls="development-manager">Senior Business Development Manager</button>
        </h4>
        </div>
        <div id="development-manager" class="collapse" aria-labelledby="headingFive" data-parent="#career-opportunities">
        <div class="card-body pb-0">
            <p class="mb-4">It is truly amazing the damage that we, as parents, can inflict on our children. So why do we do it? For the most part, we don’t do it intentionally or with malice. In the majority of cases, the cause is a well-meaning but unskilled or un-thinking parent, who says the wrong thing at the wrong time, and the message sticks – as simple as that!</p>
            <ul class="list list-unstyled ckeck-list mb-4 mb-md-5">
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>One of the main areas that I work on with my clients</span></li>
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>And it’s not just parents that are the cause – teachers</span></li>
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Nothing changes until something moves</span></li>
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Get the oars in the water and start rowing.</span></li>
            <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span> Execution is the single biggest factor in achievement</span></li>
            </ul>
            <a href="#" class="btn btn-light-round btn-round w-space">Let’s Get Started<i class="fas fa-arrow-right pl-3"></i></a>
        </div>
        </div>
    </div>
    </div>
</div>
</div>
<div class="row mt-4 mt-md-5">
<div class="col text-center">
    <p>Don’t see a role that fits? Send us your resume.</p>
    <a href="#" class="btn btn-primary btn-round text-white w-space">Contact Us<i class="fas fa-arrow-right pl-3"></i></a>
</div>
</div>
</div>
</section>
<!--=================================
Career Opportunities -->
@endsection