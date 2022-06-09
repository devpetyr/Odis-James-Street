<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('assets-ui/images/logo.png')}}">
    <title>James Street Admin-Panel</title>
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
<!--[if lt IE 9]>
    <script src="{{url('assets/js/html5shiv.min.js')}}"></script>
    <script src="{{url('assets/js/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body>
<div class="main-wrapper account-wrapper">
    <div class="account-page">
        <div class="account-center">
            <div class="account-box">
                <form action="{{route('login_data_page')}}" class="form-signin" method="POST">@csrf
                    <div class="account-logo" >
                        <img src="{{url('assets-ui/images/jamesbiglogo.png')}}" alt="" style="max-height: 100px !important" >
                    </div>
                    <div class="form-group">
                        @if(Session::has('Failed_Empty'))
                            <span class="text-danger" role="alert">
                              <strong>* {{Session::get('Failed_Empty')}}</strong>
                           </span>
                        @endif
                        <label>Email</label>
                        <input type="text" autofocus="" class="form-control" name="email" required value="{{(Session::has('email'))?Session::get('email'):''}}">
                        @if(Session::has('Failed_Email'))
                            <span class="text-danger" role="alert">
                                <strong>* {{Session::get('Failed_Email')}}</strong>
                           </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" required>
                        @if(Session::has('Failed_Password'))
                            <span class="text-danger" role="alert">
                                <strong>* {{Session::get('Failed_Password')}}</strong>
                           </span>
                        @endif
                    </div>
{{--                    <div class="form-group text-right">--}}
{{--                        <a href="forgot-password.html">Forgot your password?</a>--}}
{{--                    </div>--}}
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary account-btn" style="background-color: #dba857;">Login</button>
                    </div>
{{--                    <div class="text-center register-link">--}}
{{--                        Don’t have an account? <a href="register.html">Register Now</a>--}}
{{--                    </div>--}}
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{url('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{url('assets/js/popper.min.js')}}"></script>
<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/js/app.js')}}"></script>
</body>
</html>
