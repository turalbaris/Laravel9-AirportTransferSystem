@extends('layouts.adminbase')

@section('title', 'Product List')
@section('icon', Storage::url($setting->icon))

@section('content')

    <!-- /. PAGE WRAPPER  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <hr>
                        <div class="col-md-12">
                            <a href="{{route('admin.product.create')}}" class="btn btn-lg btn-primary"> Add Product</a>
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
                                Product List
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" >
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Category</th>
                                            <th>Title</th>
                                            <th>Base Price</th>
                                            <th>KM Price </th>
                                            <th>Capacity</th>
                                            <th>Image</th>
                                            <th>Image Gallery</th>
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
                                                <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category, $rs->category->title)}}</td>
                                                <td>{{$rs->title}}</td>
                                                <td>{{$rs->base_price}} $</td>
                                                <td>{{$rs->km_price}} $</td>
                                                <td>{{$rs->capacity}}</td>
                                                <td>
                                                    @if($rs->image)
                                                        <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                                    @endif
                                                </td>
                                                <td><a href="{{route('admin.image.index',['pid'=>$rs->id])}}"
                                                    onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700')">
                                                        <img src="{{asset('assets')}}/admin/img/gallery_icon.jpg" style="width: 40px">
                                                    </a>
                                                </td>
                                                <td>{{$rs->status}}</td>
                                                <td><a href="{{route('admin.product.edit',['id'=>$rs->id])}}" class="btn btn-primary">Edit </a></td>
                                                <td><a href="{{route('admin.product.destroy',['id'=>$rs->id])}}" class="btn btn-danger"
                                                       onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                                                <td><a href="{{route('admin.product.show',['id'=>$rs->id])}}" class="btn btn-success">Show</a></td>
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
