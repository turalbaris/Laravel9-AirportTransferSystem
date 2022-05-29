@extends('layouts.frontbase')

@section('title', 'User Messages')
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
                                <div class="d-flex flex-column text-center mb-5 pt-3">
                                    Messages sent via the contact form with your registered e-mail address will appear below.
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" >
                                        <thead>
                                        <tr>
                                            <th>Name & Surname</th>
                                            <th>phone</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Admin Note</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach( $data as $rs)
                                            <tr>
                                                <td>{{$rs->name}}</td>
                                                <td>{{$rs->phone}}</td>
                                                <td>{{$rs->subject}}</td>
                                                <td>{{$rs->message}}</td>
                                                <td>{{$rs->note}}</td>
                                                <td>
                                                    @if($rs->status == 'New')
                                                        Not seen
                                                    @else
                                                        Seen
                                                    @endif
                                                </td>
                                                <td>{{$rs->created_at}}</td>
                                                <td><a href="{{route('myaccount.user_message_delete',['id'=>$rs->id])}}" class="btn btn-danger"
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

@endsection
