@extends('layouts.frontbase')

@section('title', 'User Reviews')
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
                                <div class="d-flex flex-column text-center mb-5 pt-3">My Reviews</div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" >
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name & Surname</th>
                                            <th>Vehicle Name***</th>
                                            <th>Subject</th>
                                            <th>Review</th>
                                            <th>Rate</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach( $data as $rs)
                                            <tr>
                                                <td>{{$rs->id}}</td>
                                                <td>{{$userinfo->name}}</td>
                                                <td>
                                                    @php
                                                        $productdata = DB::table('products')->where('id', '=', $rs->product_id)->get();
                                                    @endphp
                                                    @foreach( $productdata as $pid)
                                                        @if($pid->id == $rs->product_id)
                                                            <a href="{{route('product',['id'=>$pid->id])}}">{{$pid->title}}</a>
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>{{$rs->subject}}</td>
                                                <td>{{$rs->review}}</td>
                                                <td>{{$rs->rate}}</td>
                                                <td>
                                                    @if($rs->status == 'New')
                                                        Under Review
                                                    @elseif($rs->status == 'True')
                                                        Approved
                                                    @else
                                                        Disapproved
                                                    @endif
                                                </td>
                                                <td>{{$rs->created_at}}</td>
                                                <td><a href="{{route('myaccount.user_review_delete',['id'=>$rs->id])}}" class="btn btn-danger"
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
