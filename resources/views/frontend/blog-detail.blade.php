@extends('layouts.frontend')
@section('content')
<!--=================================
inner banner -->
<section class="header-inner bg-overlay-black-50" style="background-image: url({{ asset('frontend/images/header-inner/009.jpg')}} );">
<div class="container">
    <div class="row d-flex justify-content-center">
    <div class="col-md-12">
        <div class="header-inner-title text-center">
        <h1 class="text-white font-weight-normal mb-0">From a small startup to a leading global agency in 10 Years.</h1>
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
    <div class="row justify-content-center">
    <div class="col-xl-10">
        <div class="blog-detail">
        <div class="blog-post mb-4 mb-md-5">
            <div class="blog-post-image">
            <img class="img-fluid" src="{{ asset('frontend/images/blog/01.jpg') }}" alt="">
            </div>
            <div class="blog-post-content">
            <div class="blog-post-info">
                <div class="blog-post-author">
                <a href="#" class="btn btn-light-round btn-round text-primary">Marketing</a>
                </div>
                <div class="blog-post-date">
                <a href="#">February 4, 2020</a>
                </div>
            </div>
            <div class="blog-post-details">
                <h5 class="blog-post-title">
                From a small startup to a leading global agency in 10 Years.
                </h5>
                <p class="mb-4">Imagine that a few more steps ahead there is a place where the path splits, where is goes off to the left and off to the right. Pause here for a few moments and have a think. Here, there are two different pathways, two possibilities, two ways that you could choose to go.</p>
                <p class="mb-md-5 mb-4">You carry on doing the same things, living the same way and dealing with this thing in the same way as you have been doing. If you were choose the path to the right, the right path, there are new possibilities, achievement, freedom of mind, positive and progressive implications. Think about that as you stand at this place where the path splits. You want to make a decision and commit to one of these paths. Before you make that decision, we are going to see what each path holds for your future.</p>
                <div class="d-sm-flex bg-light border-radius p-4 p-md-5 mb-md-5 mb-4">
                <i class="fas fa-quote-left pr-4 fa-6x text-primary"></i>
                <p class="mb-0 text-dark">Politics can be attributed to his perseverance to overcome his personal liabilities, and his desire to constantly become better. Next time you really want to achieve something, take time to focus on your own personal journal. What is your temptation that is standing in your wayv to greatness.</p>
                </div>
                <ul class="list list-unstyled">
                <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Use a past defeat as a motivator. Remind yourself you have nowhere to go except</span></li>
                <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Give yourself the power of responsibility. </span></li>
                <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Remind yourself the only thing stopping you is yourself.</span></li>
                <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Make a list of your achievements toward your long-term</span></li>
                <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>goal and remind yourself that intentions don’t count, only action’s.</span></li>
                </ul>
            </div>
            </div>
        </div>
        <div class="blog-post mb-4 mb-md-5">
            <div class="blog-post-image position-relative">
            <img class="img-fluid" src="{{ asset('frontend/images/blog/02.jpg') }}" alt="">
            <a class="icon-btn icon-btn-lg icon-btn-all-center btn-animation popup-youtube" href="https://www.youtube.com/watch?v=LgvseYYhqU0"><i class="fas fa-play fa-1x"></i>
            </a>
            </div>
            <div class="blog-post-content">
            <div class="blog-post-details">
                <h5 class="blog-post-title">
                How google’s BERT algorithm affects your website traffic
                </h5>
                <p class="mb-4">Making a decision to do something – this is the first step. We all know that nothing moves until someone makes a decision. The first action is always in making the decision to proceed. This is a fundamental step, which most people overlook.</p>
                <div class="d-sm-flex align-items-center">
                <div class="blog-post-meta pr-4">
                    <a href="#"><i class="far fa-heart pr-1"></i>14</a>
                    <a href="#"><i class="far fa-eye pr-1"></i>21</a>
                    <a href="#"><i class="far fa-comments pr-1"></i>03</a>
                </div>
                <div class="social d-flex align-items-center">
                    <p class="text-primary mb-0 pr-2">Share this post:</p>
                    <a href="#"><i class="fab fa-facebook-f pr-3 text-light"></i></a>
                    <a href="#"><i class="fab fa-twitter pr-3 text-light"></i></a>
                    <a href="#"><i class="fab fa-instagram pr-3 text-light"></i></a>
                    <a href="#"><i class="fab fa-linkedin text-light"></i></a>
                </div>
                </div>
            </div>
            </div>
        </div>
        <hr>
        <div class="navigation post-navigation my-md-4">
            <div class="nav-previous">
            <a href="#" class="btn btn-light-round right-round btn-round"><i class="fas fa-arrow-left pr-3"></i><span>Five initial steps you must do to increase your business incomes</span></a>
            </div>
            <div class="nav-next">
            <a href="#" class="btn btn-primary-round btn-round"><span>How google’s BERT algorithm affects your website traffic</span><i class="fas fa-arrow-right pl-3"></i></a>
            </div>
        </div>
        <hr>
        <div class="comments mt-4 mt-md-5">
            <h5 class="mb-4">Comments</h5>
            <div class="media mb-4">
            <div class="avatar avatar-md">
                <img src="{{ asset('frontend/images/avatar/01.jpg') }}" class="img-fluid rounded-circle" alt="...">
            </div>
            <div class="media-body ml-3 border p-3 p-sm-4">
                <div class="d-flex">
                <h6 class="mt-0">Alice Williams</h6>
                <a class="ml-auto" href="#"><i class="fas fa-reply pr-2"></i>Reply</a>
                </div>
                <p>Then work backwards to develop the plan. What steps are required to get you to the goals? Make the plan as detailed as possible. Try to visualize and then plan.</p>
            </div>
            </div>
            <div class="media mb-4 ml-5">
            <div class="avatar avatar-md">
                <img src="{{ asset('frontend/images/avatar/06.jpg') }}" class="img-fluid rounded-circle" alt="...">
            </div>
            <div class="media-body ml-3 border p-3 p-sm-4">
                <div class="d-flex">
                <h6 class="mt-0">Mellissa Doe</h6>
                <a class="ml-auto" href="#"><i class="fas fa-reply pr-2"></i>Reply</a>
                </div>
                <p>Every possible setback. Commit the plan to paper and then keep it with you at all times. Review it regularly and ensure that every step takes you closer.</p>
            </div>
            </div>
            <div class="media mb-4 ml-5">
            <div class="avatar avatar-md">
                <img src="{{ asset('frontend/images/avatar/06.jpg') }}" class="img-fluid rounded-circle" alt="...">
            </div>
            <div class="media-body ml-3 border p-3 p-sm-4">
                <div class="d-flex">
                <h6 class="mt-0">Mellissa Doe</h6>
                <a class="ml-auto" href="#"><i class="fas fa-reply pr-2"></i>Reply</a>
                </div>
                <p>Focus is having the unwavering attention to complete what you set out to do. There are a million distractions in every facet of our lives.</p>
            </div>
            </div>
            <div class="media mb-4">
            <div class="avatar avatar-md">
                <img src="{{ asset('frontend/images/avatar/01.jpg') }}" class="img-fluid rounded-circle" alt="...">
            </div>
            <div class="media-body ml-3 border p-3 p-sm-4">
                <div class="d-flex">
                <h6 class="mt-0">Alice Williams</h6>
                <a class="ml-auto" href="#"><i class="fas fa-reply pr-2"></i>Reply</a>
                </div>
                <p>Once you have a clear understanding of what you want, it is critical that you engage in goal setting – specifically setting SMART goals.</p>
            </div>
            </div>
        </div>
        <div class="mt-4 mt-md-5">
            <h5 class="mb-4">Leave a reply</h5>
            <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                <input type="text" class="form-control" id="Website" placeholder="Website URL">
                </div>
                <div class="form-group col-md-6">
                <input type="text" class="form-control" id="name" placeholder="Your Name">
                </div>
                <div class="form-group col-md-6">
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email Address">
                </div>
                <div class="form-group col-md-6">
                <input type="text" class="form-control" id="number" placeholder="Phone Number">
                </div>
                <div class="form-group col-md-12">
                <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                </div>
                <div class="col-md-12">
                <a class="btn btn-primary" href="#">Submit Now</a>
                </div>
            </div>
            </form>
        </div>
        </div>
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
    <a href="#" class="btn btn-primary-round btn-round mx-0 mx-md-3 text-white">Let’s Get Started<i class="fas fa-arrow-right pl-3"></i></a>
    </div>
</div>
</section>
<!--=================================
Action Box --> 
@endsection