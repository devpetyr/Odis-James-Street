<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('assets-ui/images/logo.png')}}">
    <title>James Street Admin-Panel</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/plugins/summernote/dist/summernote-bs4.css')}}">
    <!--[if lt IE 9]>
    <script src="{{url('assets/js/html5shiv.min.js')}}"></script>
    <script src="{{url('assets/js/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body>
<div class="main-wrapper">
    <div class="header">
        <div class="header-left">
            <a href="{{route('dashboard_page')}}" class="logo">
                <img src="{{url('assets-ui/images/logo.png')}}" width="35" height="35" alt=""> <span>James-Street</span>
            </a>
        </div>
        <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
        <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
        <ul class="nav user-menu float-right">
            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="{{url('assets/img/user.jpg')}}" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
                    <span>Admin</span>
                </a>
                <div class="dropdown-menu">
{{--                    <a class="dropdown-item" href="{{url('profile')}}">My Profile</a>--}}
{{--                    <a class="dropdown-item" href="{{url('settings')}}">Settings</a>--}}
                    <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                </div>
            </li>
        </ul>
        <div class="dropdown mobile-user-menu float-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
{{--                <a class="dropdown-item" href="{{url('profile')}}">My Profile</a>--}}
{{--                <a class="dropdown-item" href="{{url('settings')}}">Settings</a>--}}
                <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
            </div>
        </div>
    </div>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">Main</li>
                    <li class="{{ Request::segment(2) === 'dashboard' ? 'active' : null }}">
                        <a href="{{url('/admin/dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                    </li>
                    <li class="{{ Request::segment(2) === 'banner-list' ? 'active' : null }}">
                        <a href="{{url('/admin/banner-list')}}"><i class="fa fa-columns"></i> <span>Banners</span></a>
                    </li>
                    <li class="{{ Request::segment(2) === 'cms-list' ? 'active' : null }}">
                        <a href="{{url('/admin/cms-list')}}"><i class="fa fa-pencil-square-o"></i> <span>CMS</span></a>
                    </li>
                    <li class="{{ Request::segment(2) === 'mentorship-list' ? 'active' : null }}">
                        <a href="{{url('/admin/mentorship-list')}}"><i class="fa fa-calendar-check-o"></i> <span>Mentorship</span></a>
                    </li>
                    <li class="{{ Request::segment(2) === 'success-stories-list' ? 'active' : null }}">
                        <a href="{{url('/admin/success-stories-list')}}"><i class="fa fa-comments"></i> <span>Success-stories</span></a>
                    </li>
                    <li class="{{ Request::segment(2) === 'events-list' ? 'active' : null }}">
                        <a href="{{url('/admin/events-list')}}"><i class="fa fa-tasks"></i> <span>Events</span></a>
                    </li>
                    <li class="{{ Request::segment(2) === 'expertise-list' ? 'active' : null }}">
                        <a href="{{url('/admin/expertise-list')}}"><i class="fa fa-commenting-o"></i> <span>Expertise</span></a>
                    </li>
                    <li class="{{ Request::segment(2) === 'email-template-list' ? 'active' : null }}">
                        <a href="{{url('/admin/email-template-list')}}"><i class="fa fa-columns"></i> <span>Email Templates</span></a>
                    </li>
                    <li class="{{ Request::segment(2) === 'sharing-list' ? 'active' : null }}">
                        <a href="{{url('/admin/sharing-list')}}"><i class="fa fa-share"></i> <span>Sharing</span></a>
                    </li>
                    <li class="{{ Request::segment(2) === 'config' ? 'active' : null }}">
                        <a href="{{url('/admin/config')}}"><i class="fa fa-wrench"></i> <span>Config</span></a>
                    </li>
                    <li>
                        <a href="{{route('crm_dashboard_page')}}"><i class="fa fa-database"></i> <span>CRM</span></a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
