<!--=================================
footer-->
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-3">
                    <a href="{{ route('homepage') }}"><img class="img-fluid" src="{{ asset('frontend/logo.jpg') }}"
                            alt=""></a>
                </div>
                <div class="col-sm-9 text-sm-right mt-4 mt-sm-0">
                    <ul class="list-unstyled mb-0 social-icon">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-github"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 my-sm-5 pb-0">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <h5 class="text-primary mb-2 mb-sm-4">IT Services</h5>
                <div class="footer-link">
                    <ul class="list-unstyled mb-0">
                        <li><a href="{{ route('service') }}">Web Development</a></li>
                        <li><a href="{{ route('service') }}">Ecommerce Solutions</a></li>
                        <li><a href="{{ route('service') }}">Prestashop</a></li>
                        <li><a href="{{ route('service') }}">Wordpress</a></li>
                        <li><a href="{{ route('service') }}">Mobile App Development</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <h5 class="text-primary mb-2 mb-sm-4">Company</h5>
                <div class="footer-link">
                    <ul class="list-unstyled mb-0">
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('teams') }}">Leadership Team</a></li>
                        <li><a href="#">Visit Us</a></li>
                        <li><a href="{{ route('service') }}">Our Work</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li><a href="{{ route('careers') }}">Careers <span class="badge badge-primary ml-2">We're hiring</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2 mb-4 mb-sm-0">
                <h5 class="text-primary mb-2 mb-sm-4">Support</h5>
                <div class="footer-link">
                    <ul class="list-unstyled mb-0">
                        <li><a href="#">Forum Support</a></li>
                        <li><a href="#">Help & FAQs</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li><a href="#">Pricing And Plans</a></li>
                        <li><a href="#">Cookies Policy</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="footer-contact-info">
                    <h5 class="text-primary mb-3">Contact Advenith</h5>
                    <div class="contact-address">
                        <div class="contact-item">
                            <label>Address:</label>
                            <p>Office no. 129, 1st floor, JMD Megapolis, Sector-48, Gurgaon-122022, Haryana, India</p>
                        </div>
                        <div class="contact-item">
                            <label>Phone:</label>
                            <h4 class="mb-0 font-weight-bold"><a href="#">+(91) 7838744880</a></h4>
                        </div>
                        <div class="contact-item">
                            <label>Email:</label>
                            <a class="text-dark" href="#">info@advenith.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom py-sm-5 py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="mb-0">©Copyright {{ now()->format('Y') }} <a href="https://advenith.com">Advenith Technology.</a> All Rights
                        Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--=================================
footer-->
