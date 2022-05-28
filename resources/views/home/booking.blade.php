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
                <div class="col-lg-5">
                    <div class="bg-primary py-5 px-4 px-sm-5">
                        <div class="d-flex flex-column text-center mb-5 pt-3">@include('home.messages')</div>
                        <h3 class="d-flex flex-column align-items-center">BOOKING</h3>
                        <form class="py-5" method="post" action="{{route('booking2')}}">
                            @csrf

                            <div class="form-group">
                                <label>Pickup Location</label>
                                <select class="form-control select2" name="from_location_id">
                                    @foreach($data as $rs)
                                        <option value="{{$rs->id}}">{{$rs->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Drop off Location</label>
                                <select class="form-control select2" name="to_location_id">
                                    @foreach($data as $rs)
                                        <option value="{{$rs->id}}">{{$rs->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Select Vehicle</label>
                                <select class="custom-select border-0 px-4" name="transferInfo" style="height: 47px;">
                                    @if($findProductId)
                                    <option selected value="{{$findProductId->id}}">{{$findProductId->title}}</option>
                                    @endif
                                    @foreach($vehicle as $vhc)
                                        <option value="{{$vhc->id}}">{{$vhc->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @auth
                                <div>
                                    <button class="btn btn-dark btn-block border-0 py-3" type="submit">Search</button>

                                </div>
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
