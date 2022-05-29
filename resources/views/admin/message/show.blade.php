@extends('layouts.adminwindow')

@section('title', 'Show Message')

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
                                        <th>Name & Surname</th>
                                        <td>{{$data->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{$data->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Subject</th>
                                        <td>{{$data->subject}}</td>
                                    </tr>
                                    <tr>
                                        <th>Message</th>
                                        <td>{{$data->message}}</td>
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
                                    <tr>
                                        <th>Admin Note</th>
                                        <td>
                                            <form role="form" action="{{route('admin.message.update',['id'=>$data->id])}}" method="post">
                                                @csrf
                                                <textarea  class="form-control" id="note" name="note">{{$data->note}}</textarea>
                                                <div class="d-flex flex-column text-center mb-5 pt-3">
                                                    <button type="submit" class="btn btn-primary">Update Data</button>
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
