@extends('layouts.adminwindow')

@section('title', 'Product Image Gallery')

@section('content')
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2 class="col-md-12">{{$product->title}}</h2>
                <form role="form" action="{{route('admin.image.store',['pid'=>$product->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <div>
                            <hr>
                            <label>Title</label>
                            <input class="form-control" type="text" name="title" required="required">
                            <p class="help-block">Enter the title.</p>
                        </div>

                        <div class="custom-file">
                            <label>Image</label>
                            <input class="form-control" type="file" name="image" required="required">
                            <label class="help-block">Choose image file.</label>
                        </div>
                        <div class="input-group-append">
                            <input type="submit" class="input-group-text" value="upload">
                        </div>
                    </div>
                </form>
                <!--   Kitchen Sink -->
                <!--    md-6 changed to md-12 to cover all of the div-->
                <div class="col-md-12">
                    <hr>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Product Image List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $images as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>{{$rs->title}}</td>
                                            <td>
                                                @if($rs->image)
                                                    <img src="{{Storage::url($rs->image)}}" style="height: 150px">
                                                @endif
                                            </td>
                                            <td><a href="{{route('admin.image.destroy',['pid'=>$product->id,'id'=>$rs->id])}}" class="btn btn-danger" onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
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
    <div class="panel-heading">
        AIRTRA
    </div>
    </div>
    <!-- /. PAGE INNER  -->
@endsection
