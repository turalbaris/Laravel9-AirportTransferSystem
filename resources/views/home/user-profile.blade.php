@extends('layouts.frontbase')

@section('title', 'User Profile')
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')

    <div class="row pt-5">
        <div class="col-lg-12">
            <div>
                @include('profile.show')
            </div>
        </div>
    </div>

@endsection
