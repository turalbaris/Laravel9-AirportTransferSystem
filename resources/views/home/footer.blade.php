<!-- Footer Start -->
<div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="row pt-5">
        <div class="col-lg-4 col-md-12 mb-5">
            <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Air</span>Tra</h1>
            <p class="m-0">Feel at Home in Every City with Your Airport Transfers.</p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h5 class="text-primary mb-4">Get In Touch</h5>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>{!! $setting->address !!}</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>{!! $setting->phone !!}</p>
                    <p><i class="fa fa-envelope mr-2"></i>{!! $setting->email !!}</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="{!! $setting->twitter !!}"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="{!! $setting->facebook !!}"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="{!! $setting->youtube !!}"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="{!! $setting->instagram !!}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-primary mb-4">Popular Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white mb-2" href="/"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-white mb-2" href="{{route('about')}}"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                        <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                        <a class="text-white mb-2" href="{{route('contact')}}"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        <a class="text-white" href="{{route('faq')}}"><i class="fa fa-angle-right mr-2"></i>Faq</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-primary mb-4">Newsletter</h5>
                    <form action="">
                        <div class="form-group">
                            <input type="text" class="form-control border-0" placeholder="Your Name" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control border-0" placeholder="Your Email" required="required" />
                        </div>
                        <div>
                            <button class="btn btn-lg btn-primary btn-block border-0" type="submit">Submit Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
    <div class="row">
        <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
            <p class="m-0 text-white">
                &copy; <a class="text-white font-weight-bold" href="#">AirTra</a>. All Rights Reserved. Designed by
                <a class="text-white font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
        <div class="col-md-6 text-center text-md-right">
            <ul class="nav d-inline-flex">
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Privacy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Terms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="{{route('faq')}}">FAQs</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/lib/easing/easing.min.js"></script>
<script src="{{asset('assets')}}/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/lib/tempusdominus/js/moment.min.js"></script>
<script src="{{asset('assets')}}/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="{{asset('assets')}}/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Contact Javascript File -->
<script src="{{asset('assets')}}/mail/jqBootstrapValidation.min.js"></script>
<script src="{{asset('assets')}}/mail/contact.js"></script>

<!-- Template Javascript -->
<script src="{{asset('assets')}}/js/main.js"></script>
