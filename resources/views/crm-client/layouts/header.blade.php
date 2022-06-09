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
                            <a href="#"><img src="{{url('assets-crm/images/jamesicon.png')}}" alt="Logo" class="img-fluid"></a>
                        </div>
                        <div class="leftnavlist">
                            <span>Main</span>
                            <ul>
                                <li class="{{ Request::segment(2) === 'dashboard' ? 'active' : null }}"><a href="{{url('/crm-client/dashboard/')}}"><i class="fas fa-home"></i> Dashboard</a></li>
                                <li class="{{ Request::segment(2) === 'mentorship-files' ? 'active' : null }}"><a href="{{route('crm_client_mentorship_files')}}"><i class="fas fa-file-alt"></i> Mentorship Files</a></li>
                                <li class="{{ Request::segment(2) === '1-on-1-consultation' ? 'active' : null }}"><a href="{{url('/crm-client/1-on-1-consultation/')}}"><i class="fas fa-handshake"></i> 1 on 1 Consultation</a></li>
                                <li class="{{ Request::segment(2) === 'messages' ? 'active' : null }}"><a href="{{url('/crm-client/messages/')}}"><i class="fas fa-comments"></i> Messages</a></li>
                                <li class="{{ Request::segment(2) === 'sharing' ? 'active' : null }}"><a href="{{url('/crm-client/sharing/')}}"><i class="fas fa-share"></i> Sharings</a></li>
                                <li class="{{ Request::segment(2) === 'file-storage' ? 'active' : null }}"><a href="{{url('/crm-client/file-storage/')}}"><i class="far fa-file-alt"></i> File Storage</a></li>
                                <li><a href="{{route('home_page')}}"><i class="fas fa-globe-americas"></i> Website</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-9">
                    <div class="Rightnavigation">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="searchbar">
                                    <div class="search">
                                        <input type="text" class="search-input" placeholder="search..." name="">
                                        <a href="#" class="search-icon">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="Accountrightmain">
                                    <ul>
                                        <!--<li><a href="#"><i class="fas fa-expand"></i></a></li>-->
                                        <!--<li>-->
                                        <!--    <div class="dropdown">-->
                                        <!--        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">-->
                                        <!--            <i class="fas fa-cog"></i>-->
                                        <!--        </button>-->
                                        <!--        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">-->
                                        <!--            <li><a class="dropdown-item" href="#">Action</a></li>-->
                                        <!--            <li><a class="dropdown-item" href="#">Another action</a></li>-->
                                        <!--            <li><a class="dropdown-item" href="#">Something else here</a></li>-->
                                        <!--        </ul>-->
                                        <!--    </div>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                        <!--    <div class="dropdown">-->
                                        <!--        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">-->
                                        <!--            <i class="far fa-bell"></i>-->
                                        <!--        </button>-->
                                        <!--        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">-->
                                        <!--            <li><a class="dropdown-item" href="#">Action</a></li>-->
                                        <!--            <li><a class="dropdown-item" href="#">Another action</a></li>-->
                                        <!--            <li><a class="dropdown-item" href="#">Something else here</a></li>-->
                                        <!--        </ul>-->
                                        <!--    </div>-->
                                        <!--</li>-->
                                        <li>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="{{url('assets-crm/images/user.jpg')}}" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="{{route('crm_client_profile_page')}}">Profile</a></li>
                                                    <li><a class="dropdown-item" href="{{route('logout_google')}}">Logout  </a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
