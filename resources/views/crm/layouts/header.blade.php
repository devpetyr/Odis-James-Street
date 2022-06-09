<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="{{url('assets-crm/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{url('assets-crm/fontawesome5/css/all.min.css')}}" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('assets-crm/css/adminlte.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{url('assets-crm/css/ionicons.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{url('assets-crm/css/icheck-bootstrap.min.css')}}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{url('assets-crm/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{url('assets-crm/css/jqvmap.min.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{url('assets-crm/css/summernote-bs4.min.css')}}">
    <link rel="stylesheet" href="{{url('assets-crm/css/custom.css')}}">
    <link rel="stylesheet" href="{{url('assets-crm/css/new.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/fullcalendar/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets-crm/css/datatable.css')}}">

    <link rel="shortcut icon" type="image/x-icon" href="{{url('assets-ui/images/logo.png')}}">
    <title>James</title>
</head>
<body>
<!-- Begin main -->
<main>
    <!-- BEGIN Main Dashboard Section -->
    <section class="DashboardMain">
        <div class="container-fluid pd">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="Leftnavigation">
                        <div class="logoicon">
                           <img src="{{url('assets-crm/images/jamesicon.png')}}" alt="Logo" class="img-fluid">
                        </div>
                        <div class="leftnavlist">
                            <span>Main</span>
                            <ul>
                                <li class="{{ Request::segment(2) === 'dashboard' ? 'active' : null }}"><a href="{{url('/crm/dashboard/')}}"><i class="fas fa-home"></i> Dashboard</a></li>
                                <li class="{{ Request::segment(2) === 'events' ? 'active' : null }}"><a href="{{url('/crm/events/')}}"><i class="fas fa-box-open"></i> Events</a></li>
                                <li class="{{ Request::segment(2) === 'meetings' ? 'active' : null }}"><a href="{{url('/crm/meetings/')}}"><i class="fas fa-handshake"></i> Meetings</a></li>
                                <li class="{{ Request::segment(2) === 'orders' ? 'active' : null }}"><a href="{{url('/crm/orders/')}}"><i class="fas fa-box-open"></i> Orders</a></li>
                                <li class="{{ Request::segment(2) === 'users' ? 'active' : null }}"><a href="{{url('/crm/users/')}}"><i class="fas fa-users"></i> Users</a></li>
                                <li class="{{ Request::segment(2) === 'reports' ? 'active' : null }}"><a href="{{url('/crm/reports/')}}"><i class="fas fa-edit"></i> Reporting</a></li>
                                <li class="{{ Request::segment(2) === 'messages' ? 'active' : null }}"><a href="{{url('/crm/messages/')}}"><i class="fas fa-comments"></i> Messages</a></li>
                                <li class="{{ Request::segment(2) === 'emails' ? 'active' : null }}"><a href="{{url('/crm/emails/')}}"><i class="fas fa-envelope"></i> Emails</a></li>
                                <li class="{{ Request::segment(2) === 'real-estate-investors' ? 'active' : null }}"><a href="{{route('real_state_investors')}}"><i class="fas fa-briefcase"></i> Real Estate Professionals Network</a></li>
                                @if(Auth::user()->user_role == 1)
                                    <li><a href="{{route('dashboard_page')}}"><i class="fas fa-globe-americas"></i> CMS</a></li>
                                @else
                                    <li><a href="javascript:void(0)"><i class="fas fa-globe-americas"></i> Website</a></li>
                                @endif

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-9">
                    <div class="Rightnavigation">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-12">

                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="Accountrightmain">
                                    <ul>
                                        <li>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="{{url('assets-crm/images/user.jpg')}}" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <!--<li><a class="dropdown-item" href="#">Action</a></li>-->
                                                    <!--<li><a class="dropdown-item" href="#">Another action</a></li>-->
                                                    <li><a class="dropdown-item" href="{{route('logout')}}">Logout  </a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
