@extends('layouts.adminbase')

@section('title', 'Show Category: '.$data->title)

@section('content')

    <!-- /. PAGE WRAPPER  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <hr>
                        <div class="col-md-2">
                            <a href="{{route('admin.category.edit',['id'=>$data->id])}}" class="btn btn-lg btn-success">Edit Category</a>
                        </div>
                        <div>
                            <a href="{{route('admin.category.destroy',['id'=>$data->id])}}" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-lg btn-danger">Delete Category</a>
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
                                            <th style="width: 150px">Title</th>
                                            <th>{{$data->title}}</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 150px">Keywords</th>
                                            <th>{{$data->keywords}}</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 150px">Images</th>
                                            <th>{{$data->images}}</th>
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
                                        <a href="{{route('admin.category.index')}}" class="btn btn-lg btn-danger">Go Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End  Kitchen Sink -->
            </div>
        </div>
    </div>
    <!-- /. PAGE WRAPPER  -->

@endsection
