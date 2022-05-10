<!-- Slidebar Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('assets')}}/img/our-fleet.jpg" alt="Image" style="max-width: 1920px; max-height: 1080px">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h3 class="text-white mb-3 d-none d-sm-block">Best Transfer Reservation Services</h3>
                        <h1 class="display-3 text-white mb-3">Premium Transfer Services</h1>
                        <h5 class="text-white mb-3 d-none d-sm-block">Slide for our fleet.</h5>
                        <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</a>
                        <a href="" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a>
                    </div>
                </div>
            </div>
            @foreach($sliderdata as $rs)
                <div class="carousel-item">
                    <img class="w-100" src="{{Storage::url($rs->image)}}" alt="Image" style="max-width: 1920px; max-height: 1080px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="text-white mb-3 d-none d-sm-block">Best Transfer Reservation Services</h3>
                            <h2 class="display-3 text-white mb-3">{{$rs->title}}</h2>
                            <h5 class="text-white mb-3 d-none d-sm-block">{{$rs->description}}</h5>
                            <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</a>
                            <a href="" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>
<!-- Slidebar End -->
