@extends('layouts.frontbase')

@section('title', $data->title)

@section('content')

    <!-- Photo Start -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" src="{{Storage::url($data->image)}}" alt="Image" style="max-width: 1920px; max-height: 1080px">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h1 class="text-white mb-3 d-none d-sm-block">{{$data->title}}</h1>
                    <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</a>
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
        <p>{!! $data->tax !!}$</p>
        <h3 class="mb-3">Status</h3>
        <p>{!! $data->status !!}</p>
        <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</a>
    </div>
    <!-- Detail End -->



@endsection
