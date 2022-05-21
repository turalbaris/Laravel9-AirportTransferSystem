@extends('layouts.adminbase')

@section('title', 'Reviews & Comment List')
@section('icon', Storage::url($setting->icon))

@section('content')

    <!-- /. PAGE WRAPPER  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    @if ($newcount > 1)
                        <div class="alert alert-danger text-center">
                            <strong>You have {{$newcount}} new comments.</strong>
                        </div>
                    @elseif ($newcount == 1)
                        <div class="alert alert-danger text-center">
                            <strong>You have 1 new comment.</strong>
                        </div>
                    @else
                        <div class="alert alert-info text-center">
                            <strong>You have no new comment.</strong>
                        </div>
                    @endif
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="d-flex flex-column text-center mb-5 pt-3">Comment List </div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" >
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Product</th>
                                                <th>Name</th>
                                                <th>Subject</th>
                                                <th>Review</th>
                                                <th>Rate</th>
                                                <th>Status</th>
                                                <th>Show</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach( $data as $rs)
                                                <tr>
                                                    <td>{{$rs->id}}</td>
                                                    <th><a href="{{route('admin.product.show',['id'=>$rs->product_id])}}">{{$rs->product->title}}</a></th>
                                                    <td>{{$rs->user->name}}</td>
                                                    <td>{{$rs->subject}}</td>
                                                    <td>{{$rs->review}}</td>
                                                    <td>{{$rs->subject}}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td><a href="{{route('admin.comment.show',['id'=>$rs->id])}}" class="btn btn-success"
                                                           onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700')">Show</a>
                                                    </td>
                                                    <td><a href="{{route('admin.comment.destroy',['id'=>$rs->id])}}" class="btn btn-danger"
                                                           onclick="return confirm('Deleting !! Are you sure ?')">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
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
