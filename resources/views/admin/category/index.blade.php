@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')

    <!-- /. PAGE WRAPPER  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <hr>
                        <div class="col-md-12">
                            <a href="/admin/category/create" class="btn btn-lg btn-primary"> Add Category</a>
                        </div>
                        <br>
                        <hr>
                        <hr>
                    </div>

                    <!--   Kitchen Sink -->
                    <!--    md-6 changed to md-12 to cover all of the div-->
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Category List
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" >
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Keywords</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>Show</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach( $data as $rs)
                                            <tr>
                                                <td>{{$rs->id}}</td>
                                                <td>{{$rs->title}}</td>
                                                <td>{{$rs->keywords}}</td>
                                                <td>{{$rs->description}}</td>
                                                <td>{{$rs->image}}</td>
                                                <td>{{$rs->status}}</td>
                                                <td><a href="/admin/category/edit/{{$rs->id}}" class="btn btn-primary">Edit </a></td>
                                                <td><a href="/admin/category/delete/{{$rs->id}}" class="btn btn-danger"
                                                    onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                                                <td><a href="/admin/category/show/{{$rs->id}}" class="btn btn-success">Show</a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End  Kitchen Sink -->

            </div>
        </div>
        <!-- /. ROW  -->

    </div>
    <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->

@endsection
