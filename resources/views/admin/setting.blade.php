@extends('layouts.adminbase')

@section('title', 'Settings')
@section('title', $data->title)
@section('icon', Storage::url($data->icon))

@section('head')
    <!-- include summernote css/js //// Summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')

    <!-- /. PAGE WRAPPER  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Settings</h1>

                    <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <ul class="nav nav-pills">
                                        <li class="">
                                            <a href="#general-pills" data-toggle="tab">General</a>
                                        </li>
                                        <li class="">
                                            <a href="#smptp-email-pills" data-toggle="tab">Smtp Email</a>
                                        </li>
                                        <li class="active">
                                            <a href="#social-media-pills" data-toggle="tab">Social Media</a>
                                        </li>
                                        <li class="">
                                            <a href="#about-us-pills" data-toggle="tab">About Us</a>
                                        </li>
                                        <li class="">
                                            <a href="#contact-pills" data-toggle="tab">Contact Page</a>
                                        </li>
                                        <li class="">
                                            <a href="#references-pills" data-toggle="tab">References</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <hr>
                                        <div class="tab-pane fade" id="general-pills">
                                            <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                                            <div class="tab-pane fade active in">
                                                <label>Title</label>
                                                <input type="text" name="title" value="{{$data->title}}" class="form-control">
                                            </div>
                                            <div class="">
                                                <label>Keywords</label>
                                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                                            </div>
                                            <div class="">
                                                <label>Description</label>
                                                <input type="text" name="description" value="{{$data->description}}" class="form-control">
                                            </div>
                                            <div class="">
                                                <label>Company</label>
                                                <input type="text" name="company" value="{{$data->company}}" class="form-control">
                                            </div>
                                            <div class="">
                                                <label>Address</label>
                                                <input type="text" name="address" value="{{$data->address}}" class="form-control">
                                            </div>
                                            <div class="">
                                                <label>Phone</label>
                                                <input type="number" name="phone" value="{{$data->phone}}" class="form-control">
                                            </div>
                                            <div class="">
                                                <label>Fax</label>
                                                <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                                            </div>
                                            <div class="">
                                                <label>Email</label>
                                                <input type="email" name="email" value="{{$data->email}}" class="form-control">
                                            </div>
                                            <div class="">
                                                <label>Status</label>
                                                <select class="form-control" name="status">
                                                    <option selected>{{$data->status}}</option>
                                                    <option>True</option>
                                                    <option>False</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Icon</label>
                                                <input class="form-control" type="file" name="icon" >
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="smptp-email-pills">
                                            <div class="form-group">
                                                <label>Smtp Server</label>
                                                <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Smtp Email</label>
                                                <input type="email" name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Smtp Password</label>
                                                <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Smtp Port</label>
                                                <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="tab-pane fade active in" id="social-media-pills">
                                            <div class="form-group">
                                                <label>Instagram</label>
                                                <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Facebook</label>
                                                <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Twitter Port</label>
                                                <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Youtube</label>
                                                <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="about-us-pills">
                                            <div class="form-group">
                                                <label>About Us</label>
                                                <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="contact-pills">
                                            <div class="form-group">
                                                <label>Contact</label>
                                                <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="references-pills">
                                            <div class="form-group">
                                                <label>References</label>
                                                <textarea id="references" name="references">{{$data->references}}</textarea>
                                            </div>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-info">Update Setting</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
@endsection

@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#references').summernote({height: 180});
            $('#aboutus').summernote({height: 180});
            $('#contact').summernote({height: 180});
        });
    </script>
@endsection
