@extends('layouts.adminwindow')

@section('title', $data->product->title.' Review')

@section('content')
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <hr>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Detail Message Data
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <tr>
                                        <th>Id</th>
                                        <td>{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Product</th>
                                        <td>{{$data->product->title}}</td>
                                    </tr>
                                    <tr>
                                        <th>Name & Surname</th>
                                        <td>{{$data->user->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Name & Surname</th>
                                        <td>{{$data->user->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Subject</th>
                                        <td>{{$data->subject}}</td>
                                    </tr>
                                    <tr>
                                        <th>Review</th>
                                        <td>{{$data->review}}</td>
                                    </tr>
                                    <tr>
                                        <th>Rate</th>
                                        <td>{{$data->rate}}</td>
                                    </tr>
                                    <tr>
                                        <th>IP address</th>
                                        <td>{{$data->IP}}</td>
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
                                    <tr>
                                        <th>Admin Note</th>
                                        <td>
                                            <form role="form" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">
                                                @csrf
                                                <select name="status">
                                                    <option selected>{{$data->status}}</option>
                                                    <option>True</option>
                                                    <option>False</option>
                                                </select>
                                                <div class="d-flex flex-column text-center mb-5 pt-3">
                                                    <button type="submit" class="btn btn-primary">Update Comment</button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /. ROW  -->
    <div class="panel-heading">
        AIRTRA
    </div>
    </div>
    <!-- /. PAGE INNER  -->
@endsection
