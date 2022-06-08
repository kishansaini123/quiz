<!--=================================
header -->
<header class="header default">
    <div class="topbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="d-block d-md-flex align-items-center text-center">
                        <div class="mr-4 d-inline-block py-1">
                            <a href="mail:info@advenith.com"><i
                                    class="far fa-envelope mr-2 fa-flip-horizontal text-primary"></i>info@advenith.com</a>
                        </div>
                        <div class="mr-auto d-inline-block py-1">
                            <a href="tel:1-800-555-1234"><i class="fas fa-map-marker-alt text-primary mr-2"></i>
                                JMD Megapolis, Sector-48, Gurgaon, Haryana, India
                            </a>
                        </div>
                        <div class="d-inline-block py-1">
                            <ul class="list-unstyled">
                                <li><a href="{{ route('careers') }}">Careers</a></li>
                                {{-- <li><a href="{{ route('blog') }}">News & Media</a></li> --}}
                                {{-- <li><a href="{{ route('faq') }}">FAQ</a></li> --}}
                                @guest
                                    @if (Route::has('login'))
                                        <li><a href="{{ route('login') }}"><i class="fa fa-sign-in-alt"></i></a></li>
                                    @endif
                                @else
                                    <li><a href="{{ route('dashboard') }}"><i class="fa fa-tachometer-alt"></i></a></li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar bg-white navbar-static-top navbar-expand-lg">
        <div class="container-fluid">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse"><i
                    class="fas fa-align-left"></i></button>
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="img-fluid" src="{{ asset('frontend/logo.jpg') }}" alt="logo">
            </a>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item {{ Route::currentRouteNamed('homepage') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteNamed('about') ? 'active' : '' }}">
                        <a href="{{ route('about') }}" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteNamed('service') ? 'active' : '' }}">
                        <a href="{{ route('service') }}" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteNamed('contact') ? 'active' : '' }}">
                        <a href="{{ route('contact') }}" class="nav-link">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="d-none d-sm-flex ml-auto mr-5 mr-lg-0 pr-4 pr-lg-0">
                <ul class="nav ml-1 ml-lg-2 align-self-center">
                    <li class="contact-number nav-item pr-4 ">
                        <a class="font-weight-bold" href="tel:+(91) 7838744880"><i class="fab fa-whatsapp pr-2"></i>+(91) 7838744880</a>
                    </li>
                    <li class="header-search nav-item">
                        <div class="search">
                            <a class="search-btn not_click" href="javascript:void(0);"></a>
                            <div class="search-box not-click">
                                <form action="#" method="get">
                                    <input type="text" class="not-click form-control" name="search"
                                        placeholder="Search..">
                                    <button class="search-button" type="submit"> <i
                                            class="fa fa-search not-click"></i></button>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--=================================
header -->
