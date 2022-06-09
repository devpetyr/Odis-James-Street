<footer>
    <div class="container">

        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="footercontent fst">
                    <a href="{{route('home_page')}}"><img src="{{url('uploads/logo-footer.png')}}" class="img-fluid"></a>
                    <div class="text_slider">
                      <div>
                        <div class="text_box">
                          <h3>WE DO THE RIGHT THING</h3>
                          <p>We operate in good faith and with fall transparency </p>
                          <p>We value integrity. We treat everyone with respect </p>
                        </div>    
                      </div>
                      <div>
                        <div class="text_box">
                          <h3>WE PUT PEOPLE FIRST</h3>
                          <p>We value the person more than the business transaction</p>
                          <p>We work to help people to achieve their objective. We give back to the community</p>
                        </div>
                      </div> 
                       <div>
                        <div class="text_box">
                          <h3>    WE CARE DEEPLY ABOUT THE ECONOMICS</h3>
                          <h3>EMPOWERMENT OF UNDER-SERVED COMMUNITIES</h3>
                          <p>We invest time, energy and resources</p>
                          <p>We support financial education. We believe in having a wealth plan</p>
                        </div>    
                      </div>
                      <div>
                        <div class="text_box">
                          <h3> EVERYBODY WINS </h3>
                          <p>We seek win / win solutions. We make fair offers and compensate fairly</p>
                          <strong>JAMES STREET CAPITAL TEAM</strong>
                        </div>
                      </div>
                    </div>
                </div>
                
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="quicklinks at">
                    <small>Quick Links</small>
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a  href="{{url('/events')}}">Events</a></li>
                        <li><a href="{{url('/expertise')}}">Expertise</a></li>
                        <li><a href="{{url('/mentorship-plans-and-pricing')}}">Mentorship Plans & Pricing </a></li>
                        <li><a href="{{url('/30-min-consult')}}">30 Min Consult</a></li>
                        <li><a href="{{url('/text-me')}}">Text Me</a></li>
                        <li><a href="{{url('/contact')}}">Contact</a></li>
                        <li><a href="{{url('/book-odis-james')}}">Book Odis James</a></li>
                    </ul>
                </div>
            </div>
            <!--<div class="col-md-3 col-sm-3">-->
            <!--    <div class="quicklinks">-->
            <!--        <small>Services</small>-->
            <!--        <ul>-->
            <!--            <li><a href="#">Lorem ipsum dolor</a></li>-->
            <!--            <li><a href="#">sit amet, consectetura</a></li>-->
            <!--            <li><a href="#">dipiscing elit sed do eiusmod </a></li>-->
            <!--            <li><a href="#">tempor</a></li>-->
            <!--            <li><a href="#">incididunt ut la</a></li>-->
            <!--            <li><a href="#">bore et dolore</a></li>-->
            <!--        </ul>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="col-md-4 col-sm-4">
                <div class="quicklinks">
                    <small>Contact Us</small>
                    <ul>
                        <li><a href="#"><i class="fas fa-home"></i> {{$config->address}}</a></li>
                        <li><a href="#"><i class="fas fa-envelope-open-text"></i> {{$config->email}}</a></li>
                        <li><a href="#"><i class="fas fa-phone-alt"></i> {{$config->phone}}</a></li>
                    </ul>
                </div>
                <div class="footersocail">
                    <ul>
                        <li><a href="{{$config->fb_link}}"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="{{$config->twitter_link}}"><i class="fab fa-twitter-square"></i></a></li>
                        <li><a href="{{$config->insta_link}}"><i class="fab fa-instagram-square"></i></a></li>
                        <li><a href="{{$config->linkedin_link}}"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
{{--        <div class="row">--}}
{{--            <div class="col-md-3 col-sm-3">--}}
{{--                <div class="footercontent fst">--}}
{{--                    <b>WE DO THE RIGHT THING</b>--}}
{{--                        <p>We operate in good faith and with fall transparency--}}
{{--                            We value integrity. We treat everyone with respect</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-sm-3">--}}
{{--                <div class="footercontent fst">--}}
{{--                <b>WE PUT PEOPLE FIRST</b>--}}
{{--                    <p>We value the person more than the business transaction--}}
{{--                        We work to help people to achieve their objective. We give back to the community</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-sm-3">--}}
{{--                <div class="footercontent fst">--}}
{{--                    <b>WE CARE DEEPLY ABOUT THE ECONOMICS EMPOWERMENT OF UNDER-SERVED COMMUNITIES</b>--}}
{{--                    <p>We invest time, energy and resources--}}
{{--                        We support financial education. We believe in having a wealth plan</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-sm-3">--}}
{{--                <div class="footercontent fst">--}}
{{--                    <b>EVERYBODY WINS</b>--}}
{{--                    <p>We seek win / win solutions. We make fair offers and compensate fairly</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

    </div>

    <!-- Back to top button -->
    <a id="TopScroll"><i class="fas fa-angle-up"></i></a>
</footer>
<div class="copyrightbg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="copytext">
                     <p> {{$config->copyright}}</p>
                </div>
            </div>            
            <div class="col-md-6 col-sm-6">
                <div class="copytext">
                     <ul>
                         <li><a href="{{route('privacy_policy')}}" target="_blank">Privacy Policy </a></li>
                         <li><a href="{{route('term_condition')}}" target="_blank">Terms And Condition</a></li>
                     </ul>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- End main -->
<script src="{{url('assets-ui/js/bootstrap.js')}}"></script>
<script src="{{url('assets-ui/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{url('assets-ui/js/slick.min.js')}}"></script>
<script src="{{url('assets-ui/js/slick/slick.js')}}"></script>
<script src="{{url('assets-ui/js/jquery.slicknav.js')}}"></script>
<script src="{{url('assets-ui/js/jquery.fancybox.min.js')}}"></script>
<script src="{{url('assets-ui/js/wow.min.js')}}"></script>
<script src="{{url('assets-ui/js/custom.js')}}"></script>
</body>
<!-- Modal -->
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
                                <form class="row g-3">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="First Name*">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Last Name*">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="Email*">
                                    </div>
                                    <div class="col-6">
                                        <input type="password" class="form-control" placeholder="password*">
                                    </div>
                                    <div class="col-12">
                                        <div class="signupbtn">
                                            <button type="submit" class="btn btn-primary">Sign in</button>
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
<!-- BEGIN Sign In Modal -->
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
                        <form action="#">
                            <a href="#" class="fb btn">
                                <i class="fab fa-facebook-f"></i> Login with Facebook
                            </a>
                            <a href="#" class="google btn">
                                <i class="fab fa-google-plus-g"></i>
                                </i> Login with Google+
                            </a>
                            <div class="orline">
                                <small>or</small>
                            </div>
                            <div class="col-md-12">
                                <input type="email" class="form-control" placeholder="Email*">
                            </div>
                            <div class="col-12">
                                <input type="password" class="form-control" placeholder="password*">
                            </div>
                            <div class="col-12">
                                <div class="signupbtn">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</html>
<script>
    @if(session()->get('errors'))
    $('#exampleModal').show();
    $('#exampleModal').removeClass('fade');
    @endif

    $('.btn-close').click(function (){
        $('#exampleModal').hide();
        $('#exampleModal').addClass('fade');
        $('#Loginwithemail').hide();
        $('#Loginwithemail').addClass('fade');

    })

    @if(session()->get('Failed_Password') or Session::get('Failed_Email'))
    $('#Loginwithemail').show();
    $('#Loginwithemail').removeClass('fade');
    @endif
    $('#forgot-link').click(function (){
        $('#form-forgot').removeClass('d-none');
    })
</script>
<script>
    // blogslider start
$('.text_slider').slick({
  dots: true,
  arrows:false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay:true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

</script>  

