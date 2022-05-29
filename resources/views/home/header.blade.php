<!-- Topbar Start -->
<div class="container-fluid">
    <div class="row bg-secondary py-2 px-lg-5">
        <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center">
                <a class="text-white pr-3" href="{{route('faq')}}">FAQs</a>
                <span class="text-white">|</span>
                <a class="text-white px-3" href="{{route('about')}}">About Us</a>
                <span class="text-white">|</span>
                <a class="text-white pl-3" href="{{route('contact')}}">Contact</a>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-white px-3" href="{!! $setting->facebook !!}">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-white px-3" href="{!! $setting->twitter !!}">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-white px-3" href="{!! $setting->instagram !!}">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-white pl-3" href="{!! $setting->youtube !!}">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row py-3 px-lg-5">
        <div class="col-lg-4">
            <a href="/" class="navbar-brand d-none d-lg-block">
                <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">Air</span>Tra</h1>
            </a>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <div class="d-inline-flex flex-column text-center pr-3 border-right">
                    <h6>Opening Hours</h6>
                    <p class="m-0">24/7</p>
                </div>
                <div class="d-inline-flex flex-column text-center px-3 border-right">
                    <h6>Email Us</h6>
                    <p class="m-0">{!! $setting->email !!}</p>
                </div>
                <div class="d-inline-flex flex-column text-center pl-3">
                    <h6>Call Us</h6>
                    <p class="m-0">{!! $setting->phone !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
        <a href="/" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Safety</span>First</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                <a href="{{route('references')}}" class="nav-item nav-link">References</a>
                <a href="{{route('booking')}}" class="nav-item nav-link">Booking</a>
                <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
            </div>
        </div>
        @auth

        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}}</a>
            <div class="dropdown-menu ">
                <a href="{{route('myaccount.myprofile')}}" class="dropdown-item">My Profile</a>
                <a href="{{route('myaccount.myreviews')}}" class="dropdown-item">My Reviews</a>
                <a href="{{route('myaccount.mymessages')}}" class="dropdown-item">My Messages</a>
                <a href="/user-logout" class="dropdown-item">Log out</a>
            </div>
        </div>
        @endauth
        @guest
            <a href="/user-register" class="btn btn-lg btn-primary px-3 d-none d-lg-block mr-5">Register</a>
            <a href="/user-login" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Sign in</a>
        @endguest
    </nav>
</div>
<!-- Navbar End -->
