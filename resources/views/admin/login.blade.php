<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>



    <!-- Favicon -->
    <link href="@yield("icon")" rel="icon">
    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('assets')}}/admin/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets')}}/admin/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="{{asset('assets')}}/admin/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="{{asset('assets')}}/admin/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />




    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('assets')}}/admin/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets')}}/admin/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body style="background-color: #E2E2E2;">
<div class="container">
    <div class="row text-center " style="padding-top:100px;">
        <div class="col-md-12">
            <a href="/" class=""><h1 class="m-0 display-5 text-capitalize"><span class="text-primary">Air</span>Tra</h1></a>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
            <div class="panel-body">
                @include('home.messages')
                <form role="form" action="{{route('adminlogincheck')}}" method="post">
                    @csrf
                    <hr />
                    <h5> {{ __('Enter Details to Login Admin Panel') }}</h5>
                    <br />
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                        <input type="email" name="email" class="form-control" placeholder="Your Email " />
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Your Password" />
                    </div>
                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox" />  {{ __('Remember me') }}
                        </label>
                        <span class="pull-right">
                            <a href="{{ route('password.request') }}"> {{ __('Forgot password?') }}</a>
                        </span>
                    </div>
                    <button type="submit" href="index.html" class="btn btn-primary ">{{ __('Login Now ') }}</button>
                    <span class="pull-right">
                            <a href="{{ route('userlogin') }}"> {{ __('I am not an administrator.') }}</a>
                        </span>
                    <hr />
                    {{ __('Not register ? ') }}<a href="{{ route('register') }}">{{ __('click here ') }}</a>{{ __(' or to go to ') }}<a href="/">{{ __('Home') }}</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>
