@extends('layouts.adminbase')

@section('title', 'AddFAQ')
@section('icon', Storage::url($setting->icon))

@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Add FAQ</h1>
                    <!-- /. Form Starts -->
                    <div>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4>AddFAQ</h4>
                            </div>
                            <div class="panel-body">
                                <form role="form" action="{{route('admin.faq.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Question</label>
                                        <input class="form-control" id="question" type="text" name="question" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label>Answer</label>
                                        <textarea class="form-control" id="answer" name="answer" required="required">

                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-info">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /. Form finishes -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#answer').summernote({height: 120});
        });
    </script>
@endsection

