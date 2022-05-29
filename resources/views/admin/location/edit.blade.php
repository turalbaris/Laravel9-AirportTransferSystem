@extends('layouts.adminbase')

@section('title', $data->name.' - Edit')
@section('icon', Storage::url($setting->icon))

@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')

    <!-- /. PAGE WRAPPER  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Edit Location: {{$data->title}}</h1>
                    <!-- /. Form Starts -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4>Location Elements</h4>
                            </div>
                            <div class="panel-body">
                                <form role="form" action="{{route('admin.location.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select class="form-control" name="type">
                                            <option selected>{{$data->type}}</option>
                                            <option>Airport</option>
                                            <option>City</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" type="text" name="name" value="{{$data->name}}">
                                        <p class="help-block">Enter the location name.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Lat</label>
                                        <input class="form-control" type="number" name="lat" step="any" value="{{$data->lat}}">
                                        <p class="help-block">Enter the lat.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Long</label>
                                        <input class="form-control" type="number" name="long" step="any" value="{{$data->long}}" >
                                        <p class="help-block">Enter the long.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option selected>{{$data->status}}</option>
                                            <option>Active</option>
                                            <option>Not Active</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-info">Update Data</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /. Form finishes -->
                </div>
            </div>
        </div>
    </div>

@endsection

