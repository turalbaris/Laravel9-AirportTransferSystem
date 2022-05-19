@extends('layouts.adminbase')

@section('title', 'Admin Panel')
@section('icon', Storage::url($setting->icon))

@section('content')

    <!-- /. PAGE WRAPPER  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">BLANK PAGE</h1>
                    <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                            @if ($newcount > 1)
                                <div class="alert alert-danger text-center">
                                    <strong>You have {{$newcount}} new messages.</strong>
                                </div>
                            @endif
                            @if ($newcount == 1)
                                <div class="alert alert-danger text-center">
                                    <strong>You have {{$newcount}} new message.</strong>
                                </div>
                            @endif
                            @if ($newcount == 0)
                                <div class="alert alert-info text-center">
                                    <strong>You have no new messages.</strong>
                                </div>
                            @endif


                </div>
            </div>
            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->

@endsection
