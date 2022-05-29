@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')

    <!-- Booking Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="d-flex flex-column align-items-center py-3">
                <h3 class="d-flex flex-column align-items-center">BOOKING</h3>
                <div class="col-lg-5">
                    <div class="bg-primary py-5 px-4 px-sm-5">
                        <h5 class="d-flex flex-column align-items-center">{{ Auth::user()->name }}</h5><hr>
                        <form class="py-3" action="{{route('storerezervation')}}" method="post">
                            @csrf
                            {{--takes user id--}}
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" required="required" />
                            {{--takes vehicle id--}}
                            <input type="hidden" name="product_id" value="{{$findTransfer->id}}" required="required" />
                            {{--takes status as new--}}
                            <input type="hidden" name="status" value="New" required="required" />
                            <div class="form-group">
                                <div>
                                    {{--takes price--}}
                                    <label>Calculated Price ($)</label><br>
                                    <input readonly="readonly" name="price" value="{{number_format($price)}}" required="required" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    {{--takes price--}}
                                    <label>Distance (KM)</label><br>
                                    <input readonly="readonly" value="{{number_format($distance,1)}}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div id="text">
                                    <label>Pickup Location</label>
                                    <input readonly="readonly" name="from_location_id" value="{{$findFromLocation->name}}" required="required" class="form-control border-0 p-4 datetimepicker-input" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div id="text">
                                    <label>Drop off Location</label>
                                    <input readonly="readonly" name="to_location_id" value="{{$findToLocation->name}}" required="required" class="form-control border-0 p-4 datetimepicker-input" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div id="text">
                                    <label>Vehicle</label>
                                    <input readonly="readonly" value="{{$findTransfer->title}}" required="required" class="form-control border-0 p-4 datetimepicker-input" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div id="text">
                                    <label>Airline</label>
                                    <input type="text" name="Airline" placeholder="Airline" required="required" class="form-control border-0 p-4 datetimepicker-input" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div id="text">
                                    <label>Flight Number</label>
                                    <input type="text" name="flightnumber" placeholder="Flight Number" required="required" class="form-control border-0 p-4 datetimepicker-input" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <label>Flight Date</label>
                                    <input type="date" name="flightdate" min="2022-05-30" max="2030-01-30" required="required" class="form-control border-0 p-4 datetimepicker-input" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <label>Flight Time</label>
                                    <input type="time" name="flightime" value="00:00" step="900" required="required" class="form-control border-0 p-4 datetimepicker-input"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div>
                                    <label>Pickup Time</label>
                                    <input name="pickuptime" type="time" value="00:00" step="900" id="appt-time" required="required" class="form-control border-0 p-4 datetimepicker-input">
                                </div>
                            </div>
                            @auth
                                @if($distance == 0 or ($findFromLocation->type == 'City' and $findToLocation->type == 'City'))
                                    <div>
                                        <a class="btn btn-dark btn-block border-0 py-3" href="{{asset('booking')}}">You cannot choose from {{$findFromLocation->name}} to {{$findToLocation->name}}. Please choose again.</a>
                                    </div>
                                @else
                                    <div>
                                        <button class="btn btn-dark btn-block border-0 py-3" type="submit">Book Now</button>
                                    </div>
                                @endif
                            @else
                                <div>
                                    <a class="btn btn-dark btn-block border-0 py-3" href="{{asset('user-login')}}">For Book Your Trip, Please Login</a>
                                </div>
                            @endauth
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End-->
@endsection
