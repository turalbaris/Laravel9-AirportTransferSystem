@extends('layouts.frontbase')

@section('title', 'User Rezervations')
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')

    <div class="row pt-5">
        <div class="col-lg-12">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="d-flex flex-column text-center">
                                    @include('home.messages')
                                </div>
                                <div class="d-flex flex-column text-center mb-4 pt-3">
                                    <strong>Rezervations sent via the online booking form will appear below.</strong>
                                </div>
                                <div class="d-flex flex-column text-center mb-3 pt-1">
                                    Please note that you can only delete the reservation in two cases. These are the ones in the status of not being seen and being rejected.
                                    You cannot delete/cancel your accepted reservations in this panel. If you want to cancel/change an accepted rezervation let us a call ASAP.
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" >
                                        <thead>
                                        <tr>
                                            <th>Pickup Location</th>
                                            <th>Drop off Location</th>
                                            <th>Price</th>
                                            <th>Pickup Time</th>
                                            <th>Flight Date</th>
                                            <th>Status</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach( $data as $rs)
                                            <tr>
                                                <td>{{$rs->from_location_id}}</td>
                                                <td>{{$rs->to_location_id}}</td>
                                                <td>{{$rs->price}}</td>
                                                <td>{{$rs->pickuptime}}</td>
                                                <td>{{$rs->flightdate}}</td>
                                                <td>
                                                    @if($rs->status == 'Completed')
                                                        Completed
                                                    @elseif($rs->status == 'Accepted')
                                                        Accepted
                                                    @elseif($rs->status == 'Declined')
                                                        Declined !!
                                                    @else
                                                        Not Seen
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($rs->status == 'New' or $rs->status == 'Declined')
                                                    <a class="btn btn-danger" href="{{route('myaccount.user_rezervation_delete',['id'=>$rs->id])}}"
                                                       onclick="return confirm('Deleting !! Are you sure ?')">Delete
                                                    </a>
                                                    @endif
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

@endsection
