@extends('layouts.adminwindow')

@section('title', 'User Detail:'.$data->title)

@section('content')
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <hr>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Detail User Data
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
                                        <th>Roles</th>
                                        <td>
                                            @foreach($data->roles as $role)

                                                <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}" class="btn btn-danger"
                                                   onclick="return confirm('Deleting !! Are you sure ?')"> {{$role->name}} [x]</a>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Add Role to User</th>
                                        <td>
                                            <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post">
                                                @csrf
                                                <select name="role_id">
                                                    @foreach($roles as $role)
                                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="d-flex flex-column text-center mb-5 pt-3">
                                                    <button type="submit" class="btn btn-primary">Add Role</button>
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
