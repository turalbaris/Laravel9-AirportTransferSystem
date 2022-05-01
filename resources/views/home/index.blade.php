@extends('layouts.frontbase')

@section('title', 'Airport Transfer Project')


@section('content')

    {{--I may change the location or crete special blade for the slider--}}
    @section('home.slidebar')
        @include("home.slidebar")
    @show

    <!-- Booking Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="bg-primary py-5 px-4 px-sm-5">
                        <form class="py-5">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Reservation Date" data-target="#date" data-toggle="datetimepicker"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="time" id="time" data-target-input="nearest">
                                    <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Reservation Time" data-target="#time" data-toggle="datetimepicker"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px;">
                                    <option selected>Select A Service</option>
                                    <option value="1">Service 1</option>
                                    <option value="2">Service 1</option>
                                    <option value="3">Service 1</option>
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-dark btn-block border-0 py-3" type="submit">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                    <h4 class="text-secondary mb-3">Looking for an Airport Transfer?</h4>
                    <h1 class="display-4 mb-4">Book Your<span class="text-primary"> Transfer</span></h1>
                    <p>Enjoy a speedy, safe and reliable airport transfer direct to your destination.</p>
                    <div class="row py-2">
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <img src="{{asset('assets')}}/img/destination.png" style="width: 50px;padding-right: 15px"></img>
                                    <h5 class="text-truncate m-0">On-Time</h5>
                                </div>
                                <p>On-Time Pickup and Drop Off Exclusive Wait Time.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <img src="{{asset('assets')}}/img/like.png" style="width: 50px;padding-right: 15px">
                                    <h5 class="text-truncate m-0">Professional Drivers</h5>
                                </div>
                                <p> Licensed, Insured and Regulated Drivers.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <img src="{{asset('assets')}}/img/option.png" style="width: 50px;padding-right: 15px">
                                    <h5 class="text-truncate m-0">Secured Payment</h5>
                                </div>
                                <p class="m-0">No Hidden Charges Affordable All-Inclusive Rate</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <img src="{{asset('assets')}}/img/support.png" style="width: 50px;padding-right: 15px">
                                    <h5 class="text-truncate m-0">7/24 Support</h5>
                                </div>
                                <p class="m-0">Round the Clock Help Solution to All Problems</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Start -->


    <!-- About Start -->
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">About Us</h4>
                <h1 class="display-4 mb-4"><span class="text-primary">Safe</span> & <span class="text-secondary">Competitive </span></h1>
                <h5 class="text-muted mb-3">AirTra offers professional car and limo transport service with our complete fleet of modern vehicles for all your business and personal transport needs.
                </h5>
                <p class="mb-4">Our commitment to providing high class, safe, and professional transport service at competitive prices to our customers has been crucial to our ongoing success.</p>
                <ul class="list-inline">
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Worldwide Coverage</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Latest Model Vehicles</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>24/7 Customer Support</h5></li>
                </ul>
                <a href="" class="btn btn-lg btn-primary mt-3 px-4">Learn More</a>
            </div>
            <div class="col-lg-5">
                <div class="row px-3">
                    <div class="col-12 p-0">
                        <img class="{{asset('assets')}}/img-fluid w-100" src="{{asset('assets')}}/img/safety-belt-car-2.png" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="{{asset('assets')}}/img-fluid w-100" src="{{asset('assets')}}/img/safety-belt-car.png" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="{{asset('assets')}}/img-fluid w-100" src="{{asset('assets')}}/img/safety-belt-car-3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Our Services</h4>
                <h1 class="display-4 m-0"><span class="text-primary">Premium</span> Transfer Services</h1>
            </div>
            <div class="row pb-3">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <div>
                            <img src="{{asset('assets')}}/img/shield.gif" style="width: 75px">
                        </div>
                        <h3 class="mb-3">Safe Rides</h3>
                        <p>We'll make your safety our number one priority. Our experienced drivers will ensure you get to your destination safely and on time.</p>
                        <a class="text-uppercase font-weight-bold" href="">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <div>
                            <img src="{{asset('assets')}}/img/stopwatch.gif" style="width: 75px">
                        </div>
                        <h3 class="mb-3">On-Time Arrival</h3>
                        <p>When you are traveling to a busy airport like IST or JFK, you need your airport shuttle to value punctuality as much as you do.</p>
                        <a class="text-uppercase font-weight-bold" href="">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <div>
                            <img src="{{asset('assets')}}/img/payment.gif" style="width: 75px">
                        </div>
                         <h3 class="mb-3">Free Cancellation</h3>
                        <p>Your plans can be changed without any penalty! Simply contact us to cancel your reservation up until 24 hours before you would like it.</p>
                        <a class="text-uppercase font-weight-bold" href="">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <div>
                            <img src="{{asset('assets')}}/img/click.gif" style="width: 75px">
                        </div>
                        <h3 class="mb-3">Easy Booking</h3>
                        <p>Our Online Portal helps you to manage your transfers with few easy clicks. Book your easy Airport transfer now and let us handle the rest for you.</p>
                        <a class="text-uppercase font-weight-bold" href="">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <div>
                            <img src="{{asset('assets')}}/img/car.gif" style="width: 75px">
                        </div>
                        <h3 class="mb-3">Vehicle Variety</h3>
                        <p>Our diverse range of cars is now ready to cater to your needs. Choose from a range of available fleet and leave the rest to us.</p>
                        <a class="text-uppercase font-weight-bold" href="">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5"><div>
                            <img src="{{asset('assets')}}/img/24-hours.gif" style="width: 75px">
                        </div>
                        <h3 class="mb-3">7/24 Support</h3>
                        <p>We are at your service with our 24/7 e-mail and call support line dedicated to any questions you may have during your airport transfers and stay.</p>
                        <a class="text-uppercase font-weight-bold" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Features Start -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="{{asset('assets')}}/img-fluid w-100" src="{{asset('assets')}}/img/feature3.jpg" alt="">
            </div>
            <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">Why Choose Us?</h4>
                <h1 class="display-4 mb-4"><span class="text-primary">Special Transfer for</span> Our Customers</h1>
                <p class="mb-4">Experience the best luxury service for all occasions and travel needs.</p>
                <div class="row py-2">
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-4">
                            <img src="{{asset('assets')}}/img/stable.gif" style="width: 50px;padding-right: 15px">
                            <h5 class="text-truncate m-0">All-Inclusive Rates</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-4">
                            <img src="{{asset('assets')}}/img/car.gif" style="width: 50px;padding-right: 15px">
                            <h5 class="text-truncate m-0">Clean Cars</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <img src="{{asset('assets')}}/img/clock.gif" style="width: 50px;padding-right: 15px">
                            <h5 class="text-truncate m-0">Free Cancellation</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <img src="{{asset('assets')}}/img/support.gif" style="width: 50px;padding-right: 15px">
                            <h5 class="text-truncate m-0">Customer Support</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Testimonial Start -->
    <div class="container-fluid bg-light my-5 p-0 py-5">
        <div class="container p-0 py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Testimonial</h4>
                <h1 class="display-4 m-0">Our Client <span class="text-primary">Says</span></h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="{{asset('assets')}}/img-fluid" src="{{asset('assets')}}/img/testimonial-1.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Logan Paul</h5>
                            <i>Youtuber</i>
                        </div>
                    </div>
                    <p class="m-0">I'm big lover of the AirTra service! The drivers are always well-mannered and professional and feel safe and comfortable in their care. The prices are very reasonable, as compared to other chauffeur services.</p>
                </div>
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="{{asset('assets')}}/img-fluid" src="{{asset('assets')}}/img/testimonial-5.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Charlotte Lawrence</h5>
                            <i>Mechanical Engineer</i>
                        </div>
                    </div>
                    <p class="m-0">I used there car service and was happy with the experience. The drivers were professional and polite. The cars were immaculate and comfortable, and the pricing was very reasonable for this luxury service.</p>
                </div>
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="{{asset('assets')}}/img-fluid" src="{{asset('assets')}}/img/testimonial-2.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Ronaldo Mccormack</h5>
                            <i>CEO</i>
                        </div>
                    </div>
                    <p class="m-0">Everything was excellent communication was good and our driver was understanding about our delayed flight. The website was also easy to use and all interactions have been friendly. Thanks for taking care of us.</p>
                </div>
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="{{asset('assets')}}/img-fluid" src="{{asset('assets')}}/img/testimonial-3.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Nancy Drew</h5>
                            <i>CTO</i>
                        </div>
                    </div>
                    <p class="m-0">For me one of the most important things is respect and this company incarnate it through these drivers. By the way its comfortable, I recommend you this company.</p>
                </div>
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="{{asset('assets')}}/img-fluid" src="{{asset('assets')}}/img/testimonial-4.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Tony North</h5>
                            <i>Lawyer</i>
                        </div>
                    </div>
                    <p class="m-0">I think this company is very effective. They don't take time for pick up the customer. The drop off was also on time.</p>
                </div>

                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="{{asset('assets')}}/img-fluid" src="{{asset('assets')}}/img/testimonial-6.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Dominic Benjamin</h5>
                            <i>Doctor</i>
                        </div>
                    </div>
                    <p class="m-0">Let me stay off by saying, if you are looking for a reliable company with prompt airport pickup service use them! Request my driver Jonathan Gutierrez, he met us right in front escorted us to his clean car, even had cold water and hand wipes ready for us! He gave us a personalized tour as we drove of the different sites we should visit and things to do. Not your typical driver. Next time we come we will request him for sure!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@stop
