@extends('layouts.adminbase')

@section('title', $data->name.' - Show Location')
@section('icon', Storage::url($setting->icon))

@section('content')

    <!-- /. PAGE WRAPPER  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <hr>
                        <div class="col-md-2">
                            <a href="{{route('admin.location.edit',['id'=>$data->id])}}" class="btn btn-lg btn-success">Edit Location</a>
                        </div>
                        <div>
                            <a href="{{route('admin.location.destroy',['id'=>$data->id])}}" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-lg btn-danger">Delete Location</a>
                        </div>
                        <hr>
                    </div>
                    <!--   Kitchen Sink -->
                    <!--    md-6 changed to md-12 to cover all of the div-->
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Detail Data
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <tr>
                                            <th style="width: 150px">Id</th>
                                            <th>{{$data->id}}</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 150px">Type</th>
                                            <th>{{$data->type}}</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 150px">Name</th>
                                            <th>{{$data->name}}</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 150px">Lat</th>
                                            <th>{{$data->lat}}</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 150px">Long</th>
                                            <th>{!! $data->long !!}</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 150px">Status</th>
                                            <th>{{$data->status}}</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 150px">Created Date</th>
                                            <th>{{$data->created_at}}</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 150px">Updated Date</th>
                                            <th>{{$data->updated_at}}</th>
                                        </tr>
                                    </table>
                                    <div class="col-md-2">
                                        <a href="{{route('admin.location.index')}}" class="btn btn-lg btn-danger">Go Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
