@extends('layouts.adminbase')

@section('title', 'Accepted Rezervation List')
@section('icon', Storage::url($setting->icon))

@section('content')

    <!-- /. PAGE WRAPPER  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    @if ($newrezervationcount > 1)
                        <div class="alert alert-danger text-center">
                            <strong>You have {{$newrezervationcount}} accepted rezervation requests.</strong>
                        </div>
                    @elseif ($newrezervationcount == 1)
                        <div class="alert alert-danger text-center">
                            <strong>You have {{$newrezervationcount}} accepted rezervation request.</strong>
                        </div>
                    @else
                        <div class="alert alert-info text-center">
                            <strong>You have no accepted rezervation request.</strong>
                        </div>
                    @endif
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="d-flex flex-column text-center mb-5 pt-3">Accepted Rezervation List </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" >
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Pickup Location</th>
                                            <th>Drop off Location</th>
                                            <th>pickuptime</th>
                                            <th>price</th>
                                            <th>Status</th>
                                            <th>Show</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach( $rezervationdata as $rs)
                                            @if($rs->status == 'Accepted')
                                                <tr>
                                                    <td>{{$rs->id}}</td>
                                                    <td>{{$rs->from_location_id}}</td>
                                                    <td>{{$rs->to_location_id}}</td>
                                                    <td>{{$rs->pickuptime}}</td>
                                                    <td>${{$rs->price}}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td><a href="{{route('admin.rezervation.acceptedrezervation.show',['id'=>$rs->id,
                                                        'uid'=>$rs->user_id,'pid'=>$rs->product_id])}}" class="btn btn-success">Show</a>
                                                    </td>
                                                    <td><a href="{{route('admin.rezervation.acceptedrezervation.destroy',['id'=>$rs->id])}}" class="btn btn-danger"
                                                           onclick="return confirm('You have already accepted this rezervation request !! Are you sure you want to delete? ?')">Delete</a>
                                                    </td>
                                                </tr>
                                            @endif
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
