@extends('layouts.frontbase')

@section('title', 'Frequently Asked Questions |  '. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')

    <div class="row pt-5">
        <div class="col-lg-12">
                <div class="col-md-12">
                    <div class="panel-heading">
                        <div class="panel-heading">
                            <h1>Frequently Asked Questions</h1>
                            <hr>
                        </div>
                        <div class="panel-body">
                            <div id="accordion">
                                @foreach($datalist as $rs)
                                    @if($rs->status=='True')
                                    <div class="card">
                                        <div class="card-footer">
                                            <h4 class="card-link">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$loop->iteration}}" >{!! $rs->question !!}</a>
                                            </h4>
                                        </div>
                                        <div id="collapse{{$loop->iteration}}" class="collapse @once show @endonce" data-parent="#accordion" style="">
                                            <div class="card-body">
                                                {!! $rs->answer !!}
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

@endsection
