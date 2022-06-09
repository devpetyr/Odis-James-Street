<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{url('assets-ui/images/favicon.png')}}" rel="icon">
    <!-- Bootstrap CSS -->
    <link href="{{url('assets-ui/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{url('assets-ui/fontawesome5/css/all.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets-ui/css/slick.css')}}">
    <link  rel="stylesheet" type="text/css" href="{{url('assets-ui/css/slick.css')}}" >
    <link  href="{{url('assets-ui/css/slicknav.css')}}" rel="stylesheet" type="text/css">    
    <link rel="stylesheet" href="{{url('assets-ui/css/jquery.fancybox.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets-ui/css/animate.css')}}">
    <link rel="stylesheet" href="{{url('assets-ui/css/custom.css')}}">
    <title>James Street Capital</title>
</head>

<body>
<!-- BEGIN Header -->
<!-- BEGIN Header -->
<!--<header class="darkblack">-->
<!--    <div class="TopNavigation">-->
<!--        <nav class="navbar navbar-expand-lg navbar-light">-->
<!--            <div class="container">-->
<!--                <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('assets-ui/')}}/images/logo.png" class="img-fluid"></a>-->
<!--                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"-->
<!--                        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">-->
<!--                    <span class="navbar-toggler-icon"></span>-->
<!--                </button>-->
<!--                <div class="collapse navbar-collapse" id="navbarScroll">-->
<!--                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link {{ Request::segment(1) === 'events' ? 'active' : null }}" href="{{url('/events')}}">Events</a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link {{ Request::segment(1) === 'expertise' ? 'active' : null }}" href="{{url('/expertise')}}">Expertise</a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link {{ Request::segment(1) === 'mentorship-plans-and-pricing' ? 'active' : null }}"  href="{{url('mentorship-plans-and-pricing')}}">Mentorship Plans & Pricing</a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link {{ Request::segment(1) === '30-min-consult' ? 'active' : null }}" href="{{url('/30-min-consult')}}">30 Min Consult </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link {{ Request::segment(1) === 'text-me' ? 'active' : null }}" href="{{url('/text-me')}}">Text Me</a>-->
<!--                        </li>-->
<!--                        <li class="nav-item dropdown">-->
<!--                            <a class="nav-link dropdown-toggle {{ Request::segment(1) === 'contact' || Request::segment(1) === 'book-odis-james' ?  'active' : null }}" href="#" id="navbarScrollingDropdown" role="button"-->
<!--                               data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                                More-->
<!--                            </a>-->
<!--                            <ul class="dropdown-menu " aria-labelledby="navbarScrollingDropdown">-->
<!--                                <li><a class="dropdown-item" href="{{url('/contact')}}">Contact Me</a></li>-->
<!--                                <li><a class="dropdown-item" href="{{url('book-odis-james')}}">Book Odis James</a></li>-->
<!--                                @if(Auth::id()!=null)-->
<!--                                    <li><a class="dropdown-item" href="{{route('crm_client_dashboard_page')}}">Dashboard</a></li>-->
<!--                                    <li><a class="dropdown-item" href="{{url('logout')}}">{{Auth::user()->username}}  (Logout)</a></li>-->
<!--                                @else-->
<!--                                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#Loginwithemail">Login</a></li>-->
<!--                                @endif-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </nav>-->
<!--    </div>-->
<!--</header>-->
<!-- END Header -->
<!-- BEGIN Header -->
<header>
    <div class="menuSec">

            <div class="container">
               
                 <div class="row flexRow">
                     <div class="col-md-3 col-sm-3 ">
                         <div class="main_log"> <a  href="{{url('/')}}"><img src="{{url('assets-ui/images/logo.png')}}" class="img-fluid"></a></div>
                     </div>
            
                     <div class="col-md-9 col-sm-9 hidden-xs">

                           <ul id="menu">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::segment(1) === 'events' ? 'active' : null }}" href="{{url('/events')}}">Events</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/expertise')}}">Expertise</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/mentorship-plans-and-pricing')}}">Mentorship Plans & Pricing</a>
                            </li>
                               @if(Auth()->check())
                               @else
                                   <li class="nav-item">
                                       <a class="nav-link" href="{{url('/30-min-consult')}}">30 Min Consult </a>
                                   </li>
                               @endif
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/text-me')}}">Text Me</a>
                            </li>
                            <li class="nav-item ">
                                <a  href="javascript:void(0)">
                                    More
                                </a>
                                <ul>
                                    <li><a  href="{{route('realStateInvestorsView_page')}}">Real Estate Professionals Network</a></li>
                                    <li><a  href="{{url('/contact')}}">Contact Me</a></li>
                                    <li><a  href="{{url('book-odis-james')}}">Book Odis James</a></li>
                                    @if(Auth::id()!=null)
                                        <li><a  href="{{route('crm_client_dashboard_page')}}">Dashboard</a></li>
                                        <li><a  href="{{url('logout')}}">{{Auth::user()->username}}  (Logout)</a></li>
                                    @else
                                        <li><a  data-bs-toggle="modal" data-bs-target="#Loginwithemail">Login</a></li>
                                    @endif
                                </ul>
                            </li>
                        </ul>

                     </div>
                 </div>


            </div>


    </div>

</header>







<!-- END Header -->
<main>
    <!-- Modal -->
    <div class="SignInModal">
        <!-- Modal -->
        <div class="modal fade" id="Loginwithemail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="BigModal LoginWithSocial">
                            <span>Log In</span>
                            <small>New to this site? <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-dismiss="modal" aria-label="Close">Sign Up</a></small>
                            <form action="{{route('login_page')}}" method="POST" id="form-login">@csrf

                                <a href="{{route('login_google')}}" class="google btn">
                                    <i class="fab fa-google-plus-g"></i>
                                    </i> Login with Google+
                                </a>
                                <div class="orline">
                                    <small>or</small>
                                </div>
                                <div class="col-md-12">
                                    <input type="email" name="email" class="form-control" placeholder="Email*" required>
                                </div>
                                @if(Session::has('Failed_Email'))
                                    <span class="text-danger" role="alert" style="font-size: 25px;" id="al">
                                <strong>* {{Session::get('Failed_Email')}}</strong>
                                </span>
                                @endif
                                <div class="col-12">
                                    <input type="password" name="password" class="form-control" placeholder="password*" required>
                                </div>
                                @if(Session::has('Failed_Password'))
                                    <span class="text-danger" role="alert" tyle="font-size: 25px;" id="al">
                                <strong>* {{Session::get('Failed_Password')}}</strong>
                                </span>
                                @endif
                                @if(Session::has('Failed_Empty'))
                                    <span class="text-danger" role="alert" tyle="font-size: 25px;" id="al">
                                      <strong>* {{Session::get('Failed_Empty')}}</strong>
                                   </span>
                                @endif
                                <div class="col-12">
                                    <div class="signupbtn">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                        <a style="font-size:15px !important" href="javascript:void(0)" id="forgot-link">Forgot Password?</a>
                                    </div>
                                </div>
                            </form>
                            <form action="" method="POST" id="form-forgot" class="d-none">@csrf
                                <div class="orline">
                                    <small>or</small>
                                </div>
                                    <div class="col-md-12">
                                        <input type="email" name="email" class="form-control" placeholder="Email*" required>
                                    </div>
                            <div class="col-12">
                                <div class="signupbtn">
                                    <button type="submit" class="btn btn-primary" id="btn-forgot">Submit</button>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen modal-fullscreen-sm-down modal-fullscreen-lg-down">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="BigModal">
                                    <span>Sign Up</span>
                                    <form class="row g-3" action="{{route('signup_page')}}" method="POST">@csrf
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" placeholder="User Name*" name="username" required>
                                            @error('username')
                                            <p style="color: red" id="al">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" class="form-control" placeholder="Email*" name="email" required>
                                            @error('email')
                                            <p style="color: red" id="al">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <input type="password" style="display: inline-block; width: 90%;" class="form-control" minlength="8" placeholder="password*" name="password" required id="id_password"><i class="far fa-eye" id="togglePassword" style="width: 10%; cursor: pointer;"></i>
                                            @error('password')
                                            <p style="color: red" id="al">{{$message}}</p>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <div class="signupbtn">
                                                <button type="submit" class="btn btn-primary">Sign up</button>
                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#Loginwithemail" data-bs-dismiss="modal" aria-label="Close">Already a member? Log In</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Sign Up Modal -->
