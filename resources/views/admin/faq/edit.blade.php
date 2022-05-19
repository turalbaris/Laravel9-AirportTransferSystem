@extends('layouts.adminbase')

@section('title', 'Edit Product: '.$data->title)
@section('icon', Storage::url($setting->icon))

@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')

    <!-- /. PAGE WRAPPER  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Edit Product: {{$data->title}}</h1>

                    <!-- /. Form Starts -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4>FAQ Elements</h4>
                            </div>
                            <div class="panel-body">
                                <form role="form" action="{{route('admin.faq.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Question</label>
                                        <input class="form-control" type="text" name="question" value="{{$data->question}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Answer</label>
                                        <textarea  class="form-control" id="answer" name="answer">
                                            {{$data->answer}}
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option selected>{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-info">Update Data</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /. Form finishes -->
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
            $('#answer').summernote({height: 120});
        });
    </script>
@endsection
