@extends('layouts.adminwindow')

@section('title', 'New Rezervation')

@section('content')
    <div id="page-inner">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        New Rezervation Request
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <tr>
                                    <th>Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th>Name & Surname</th>
                                    <td>{{$userinfo->name}}</td>
                                </tr>
                                <tr>
                                    <th>Vehicle</th>
                                    <td>{{$vehicleinfo->title}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$userinfo->email}}</td>
                                </tr>
                                <tr>
                                    <th>Pickup Location</th>
                                    <td>{{$data->from_location_id}}</td>
                                </tr>
                                <tr>
                                    <th>Drop off Location</th>
                                    <td>{{$data->to_location_id}}</td>
                                </tr>
                                <tr>
                                    <th>Airline</th>
                                    <td>{{$data->Airline}}</td>
                                </tr>
                                <tr>
                                    <th>Flight Number</th>
                                    <td>{{$data->flightnumber}}</td>
                                </tr>
                                <tr>
                                    <th>Flight Date</th>
                                    <td>{{$data->flightdate}}</td>
                                </tr>
                                <tr>
                                    <th>Flight Time</th>
                                    <td>{{$data->flightime}}</td>
                                </tr>
                                <tr>
                                    <th>Pickup Time</th>
                                    <td>{{$data->pickuptime}}</td>
                                </tr>

                                <tr>
                                    <th>Price</th>
                                    <td>${{$data->price}}</td>
                                </tr>

                                <tr>
                                    <th>Ip</th>
                                    <td>{{$data->ip}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{$data->status}}</td>
                                </tr>
                                <tr>
                                    <th>Created Date</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Update Date</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>

                                <form role="form" action="{{route('admin.rezervation.newrezervation.update',['id'=>$data->id])}}" method="post">
                                    @csrf
                                    <tr>
                                        <th>Admin Note</th>
                                        <td>
                                            <textarea  class="form-control" id="note" name="note">{{$data->note}}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Update Date</th>
                                        <td>
                                            <select class="form-control" name="status">
                                                <option selected>{{$data->status}}</option>
                                                <option>Accepted</option>
                                                <option>Declined</option>
                                            </select>
                                            <div class="d-flex flex-column text-center mb-5 pt-3">
                                                <button type="submit" class="btn btn-primary">Update Data</button>
                                            </div>
                                        </td>
                                    </tr>
                                </form>
                            </table> <div class="col-md-2">
                                <a href="{{route('admin.rezervation.newrezervation.index')}}" class="btn btn-lg btn-danger">Go Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-heading">
        AIRTRA
    </div>
    </div>
@endsection
