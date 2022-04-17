@extends('layouts.adminbase')

@section('title', 'Edit Category: '.$data->title)

@section('content')

    <!-- /. PAGE WRAPPER  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Edit Category: {{$data->title}}</h1>

                    <!-- /. Form Starts -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4>Category Elements</h4>
                            </div>
                            <div class="panel-body">
                                <form role="form" action="/admin/category/update/{{$data->id}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control" type="text" name="title" value="{{$data->title}}">
                                        <p class="help-block">Enter the title.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input class="form-control" type="text" name="keywords" value="{{$data->keywords}}">
                                        <p class="help-block">Enter the keywords.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input class="form-control" type="text" name="description" value="{{$data->description}}">
                                        <p class="help-block">Enter the description.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input class="form-control" type="file" name="image" >
                                        <p class="help-block">Choose image file. (Doesn't work for now.)</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option selecte>{{$data->status}}</option>
                                            <option>Enable</option>
                                            <option>Disable</option>
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
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info">
                        This is a free responsive admin under cc3.0 license, so you can use it for personal and commercial use.
                        <br />
                        Enjoy this admin and for more please keep looking <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->

@endsection
