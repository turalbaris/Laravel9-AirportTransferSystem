@extends('layouts.adminbase')

@section('title', 'Admin Panel')
@section('icon', Storage::url($setting->icon))

@section('content')

    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line text-center">Dashboard</h1>

                    <!-- /. New Messages Information Box Start -->
                    @if ($newcount > 1)
                        <div class="alert alert-danger text-center">
                            <strong>You have {{$newcount}} new messages.</strong>
                        </div>
                    @elseif ($newcount == 1)
                        <div class="alert alert-danger text-center">
                            <strong>You have {{$newcount}} new message.</strong>
                        </div>
                    @else ($newcount == 0)
                        <div class="alert alert-info text-center">
                            <strong>You have no new messages.</strong>
                        </div>
                    @endif
                    <!-- /. New Messages Information Box End -->

                    <!-- /. New Rezervation Information Box Start -->
                    @if ($newrezervationcount > 1)
                        <div class="alert alert-danger text-center">
                            <strong>You have {{$newrezervationcount}} new rezervation requests.</strong>
                        </div>
                    @elseif ($newrezervationcount == 1)
                        <div class="alert alert-danger text-center">
                            <strong>You have {{$newrezervationcount}} new rezervation request.</strong>
                        </div>
                    @else
                        <div class="alert alert-info text-center">
                            <strong>You have no new rezervation request.</strong>
                        </div>
                    @endif
                    <!-- /. New Rezervation Information End -->

                    <!-- /. Reservations Waiting to Happen Start -->
                    @if ($acceptedrezervationcount > 1)
                        <div class="alert alert-danger text-center">
                            <strong>You have {{$acceptedrezervationcount}} rezervations waiting to happen..</strong>
                        </div>
                    @elseif ($acceptedrezervationcount == 1)
                        <div class="alert alert-danger text-center">
                            <strong>You have {{$acceptedrezervationcount}} rezervations waiting to happen.</strong>
                        </div>
                    @else
                        <div class="alert alert-info text-center">
                            <strong>You have no rezervation waiting to happen.</strong>
                        </div>
                    @endif
                    <!-- /. Reservations Waiting to Happen End -->

                    <!-- /. New Comments Information Box Start -->
                    @if ($newcommentcount > 1)
                        <div class="alert alert-danger text-center">
                            <strong>You have {{$newcommentcount}} new comments.</strong>
                        </div>
                    @elseif ($newcommentcount == 1)
                        <div class="alert alert-danger text-center">
                            <strong>You have 1 new comment.</strong>
                        </div>
                    @else
                        <div class="alert alert-info text-center">
                            <strong>You have no new comment.</strong>
                        </div>
                    @endif
                <!-- /. New Comments Information Box End -->
                </div>
            </div>
        </div>
    </div>


@endsection
