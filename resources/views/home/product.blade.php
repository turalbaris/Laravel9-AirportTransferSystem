@extends('layouts.frontbase')

@section('title', $data->title)
@section('icon', Storage::url($setting->icon))


@section('content')

    <div class="d-flex flex-column align-items-center py-3">
        @include('home.messages')
    </div>
    <!-- Photo Start -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" src="{{Storage::url($data->image)}}" alt="Image" style="max-width: 1920px; max-height: 1080px">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h1 class="text-white mb-3 d-none d-sm-block">{{$data->title}}</h1>
                    <form class="py-5" method="get" action="{{route('booking')}}">
                        @csrf
                    <button value="{{$data->id}}" name="product_id" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Photo End -->
    <!-- Slider Start -->
    <div class="container p-0 py-5">
        <div class="owl-carousel testimonial-carousel">
            @foreach($images as $rs)
                <div class="col-lg-12 mb-12">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="{{Storage::url($rs->image)}}" alt="0">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Slider End -->
    <!-- Detail Start -->
    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
        <h3 class="mb-3">Vehicle</h3>
        <p>{!! $data->category->title !!}</p>
        <h3 class="mb-3">Vehicle Class</h3>
        <p>{!! $data->title !!}</p>
        <h3 class="mb-3">Vehicle Description</h3>
        <p>{{$data->description}}</p>
        <h3 class="mb-3">Vehicle Detail</h3>
        <p>{!! $data->detail !!}</p>
        <h3 class="mb-3">Base Price</h3>
        <p>{!! $data->base_price !!}$</p>
        <h3 class="mb-3">KM Price</h3>
        <p>{!! $data->km_price !!}$</p>
        <h3 class="mb-3">Tax Rate</h3>
        <p>%{!! $data->tax !!}</p>
        <h3 class="mb-3">Status</h3>
        <p>{!! $data->status !!}</p>
    </div>
    <!-- Detail End -->



    <!-- Comment Start -->
    <div class="d-flex flex-column align-items-center">
        <div class="container-fluid">
            <div class="container">
                <div class="d-flex flex-column align-items-center">
                    <div class="col-lg-8">
                        <div style="padding: 30px; background: #f6f6f6;">
                            <h3 class="mb-4">Leave a comment</h3>
                            <form action="{{route('storecomment')}}" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$data->id}}" />
                                <div class="form-group">
                                    <label for="subject">Subject *</label>
                                    <input type="subject" id="subject" name="subject" required="required" maxlength="100" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="review">Review *</label>
                                    <textarea id="review" name="review" cols="30" rows="5" class="form-control" maxlength="1000" required="required"></textarea>
                                </div>
                                <div class="form-group">
                                    <label id="rate" name="rate" for="rate">Rate *</label>
                                    <select class="custom-select border-0 px-4" style="height: 47px;" name="rate" required="required">
                                        <option id="star5" name="rate" value="5">5 Star</option>
                                        <option id="star4" name="rate" value="4">4 Star</option>
                                        <option id="star3" name="rate" value="3">3 Star</option>
                                        <option id="star2" name="rate" value="2">2 Star</option>
                                        <option id="star1" name="rate" value="1">1 Star </option>
                                    </select>
                                </div>
                                @auth
                                    <div class="form-group mb-0">
                                        <input type="submit" value="Leave Comment" class="btn btn-primary px-3">
                                    </div>
                                @else
                                    <div class="form-group mb-0">
                                        <a href="{{asset('user-login')}}" class="btn btn-primary px-3">For Submit Your Review, Please Login</a>
                                    </div>
                                @endauth
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <!-- Comment End -->

        <!-- Review Start -->
        <div class="col-lg-8 py-3">
            <h3 class="col-lg-8 py-3">@if ($reviewscount == 0) No Comment @elseif($reviewscount == 1)1 Comment @else{{$reviewscount}} Comments @endif -
                {{number_format($reviewsavg,1)}}<hr></h3>
            @foreach($reviews as $rs)
            <div class="media mb-4">
                <img src="{{asset('assets')}}/img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                <div class="media-body">
                    <h6>{{$rs->user->name}} <small><i>{{$rs->created_at}}</i></small><i> - 5/{{$rs->rate}}</i></h6>
                    <strong>{{$rs->subject}}</strong>
                    <p>{{$rs->review}} ve </p>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Review End -->


@endsection
