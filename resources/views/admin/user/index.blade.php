@extends('layouts.adminbase')

@section('title', 'User List')
@section('icon', Storage::url($setting->icon))

@section('content')

    <!-- /. PAGE WRAPPER  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="d-flex flex-column text-center mb-5 pt-3">User List </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" >
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name & Surname</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Show</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach( $data as $rs)
                                            <tr>
                                                <td>{{$rs->id}}</td>
                                                <td>{{$rs->name}}</td>
                                                <td>{{$rs->email}}</td>
                                                <td>
                                                    @foreach($rs->roles as $role)
                                                        {{$role->name}}
                                                    @endforeach
                                               </td>
                                                <td><a href="{{route('admin.user.show',['id'=>$rs->id])}}" class="btn btn-success"
                                                       onclick="return !window.open(this.href, '','top=50 left=100 width=1000, height=600')">Show</a>
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
                <!-- End  Kitchen Sink -->

            </div>
        </div>
        <!-- /. ROW  -->

    </div>
    <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->

@endsection
