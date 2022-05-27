@extends('layouts.adminbase')

@section('title', 'Add Location')
@section('icon', Storage::url($setting->icon))

@section('head')
    <!-- include libraries(jQuery, bootstrap) //// Summernote -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js //// Summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection

@section('content')


    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Add Location</h1>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4>Add Location</h4>
                            </div>
                            <div class="panel-body">
                                <form role="form" action="{{route('admin.location.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select class="form-control" name="type">
                                            <option>Airport</option>
                                            <option>City</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" type="text" name="name" required="required">
                                        <p class="help-block">Enter the location name.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Lat</label>
                                        <input class="form-control" type="number" name="lat" step="any" required="required">
                                        <p class="help-block">Enter the lat.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Long</label>
                                        <input class="form-control" type="number" name="long" step="any" required="required">
                                        <p class="help-block">Enter the long.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status" required="required">
                                            <option>Active</option>
                                            <option>Not Active</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-info">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
