<!-- BEGIN Testimonial Section -->
<section class="TestimonialSec">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="mainHeading wow fadeInUp" data-wow-delay="0.6s">
                    <small>What People Are Saying</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="TestimonialSlider aos-init aos-animate" data-aos="zoom-in">
                    @foreach($testimonials as $testimonialvalue)
                    <!-- Item -->
                    <div>
                        <div class="TestimonialBox wow fadeInUp" data-wow-delay="0.6s">
                            <ul>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                            </ul>
                            <p style="font-family: 'Poppins', sans-serif !important;">{!! $testimonialvalue->description !!}</p>
                        </div>
                        <div class="userimg">
                            <img src="{{url('uploads/testimonials/').'/'.$testimonialvalue->image}}" class="img-fluid">
                        </div>
                        <div class="userdetail">
                            <span>{{$testimonialvalue->name}}</span>
                            <small>{{$testimonialvalue->designation}}</small>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Item -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Testimonial Section -->
<!-- BEGIN Logos Sec -->
<section class="FeaturedSec">
    <div class="container">
        <div class="row">
            <div class="co,col-md-12 col-sm-12">
                <div class="featuredlogo wow fadeInUp" data-wow-delay="0.9s">
                    <span>At Featured In</span>
                    <ul>
                        <li><img src="{{url('/assets-ui/')}}/images/featured1.png" class="img-fluid"></li>
                        <li><img src="{{url('/assets-ui/')}}/images/featured2.png" class="img-fluid"></li>
                        <li><img src="{{url('/assets-ui/')}}/images/featured3.png" class="img-fluid"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Logos Sec -->
</main>
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
                        <li><a href="{{url('/expertise')}}">Expertise</a></li>
                        <li><a href="{{url('/events')}}">Events</a></li>
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
<!--<footer>-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-4 col-sm-4">-->
<!--                <div class="footercontent fst">-->
<!--                    <a href="index.html"><img src="{{url('uploads/logo-footer.png')}}" class="img-fluid"></a>-->
<!--                </div>-->
<!--                 <div class="text_slider">-->
<!--                      <div>-->
<!--                        <div class="text_box">-->
<!--                          <h3>WE DO THE RIGHT THING</h3>-->
<!--                          <p>We operate in good faith and with fall transparency </p>-->
<!--                          <p>We value integrity. We treat everyone with respect </p>-->
<!--                        </div>    -->
<!--                      </div>-->
<!--                      <div>-->
<!--                        <div class="text_box">-->
<!--                          <h3>WE PUT PEOPLE FIRST</h3>-->
<!--                          <p>We value the person more than the business transaction</p>-->
<!--                          <p>We work to help people to achieve their objective. We give back to the community</p>-->
<!--                        </div>-->
<!--                      </div> -->
<!--                       <div>-->
<!--                        <div class="text_box">-->
<!--                          <h3>    WE CARE DEEPLY ABOUT THE ECONOMICS</h3>-->
<!--                          <h3>EMPOWERMENT OF UNDER-SERVED COMMUNITIES</h3>-->
<!--                          <p>We invest time, energy and resources</p>-->
<!--                          <p>We support financial education. We believe in having a wealth plan</p>-->
<!--                        </div>    -->
<!--                      </div>-->
<!--                      <div>-->
<!--                        <div class="text_box">-->
<!--                          <h3> EVERYBODY WINS </h3>-->
<!--                          <p>We seek win / win solutions. We make fair offers and compensate fairly</p>-->
<!--                          <strong>JAMES STREET CAPITAL TEAM</strong>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--            </div>-->
<!--            <div class="col-md-4 col-sm-4">-->
<!--                <div class="quicklinks at">-->
<!--                    <small>Quick Links</small>-->
<!--                    <ul>-->
<!--                        <li><a href="{{url('/')}}">Home</a></li>-->
<!--                        <li><a href="{{url('/expertise')}}">Expertise</a></li>-->
<!--                        <li><a href="{{url('/mentorship-plans-and-pricing')}}">Mentorship Plans & Pricing </a></li>-->
<!--                        <li><a href="{{url('/30-min-consult')}}">30 Min Consult</a></li>-->
<!--                        <li><a href="{{url('/text-me')}}">Text Me</a></li>-->
<!--                        <li><a href="{{url('/contact')}}">Contact</a></li>-->
<!--                        <li><a href="{{url('/book-odis-james')}}">Book Odis James</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="col-md-4 col-sm-4">-->
<!--                <div class="quicklinks">-->
<!--                    <small>Contact Us</small>-->
<!--                    <ul>-->
<!--                        <li><a href="#"><i class="fas fa-home"></i> {{$config->address}}</a></li>-->
<!--                        <li><a href="#"><i class="fas fa-envelope-open-text"></i> {{$config->email}}</a></li>-->
<!--                        <li><a href="#"><i class="fas fa-phone-alt"></i> {{$config->phone}}</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="footersocail">-->
<!--                    <ul>-->
<!--                        <li><a href="{{$config->fb_link}}"><i class="fab fa-facebook-square"></i></a></li>-->
<!--                        <li><a href="{{$config->twitter_link}}"><i class="fab fa-twitter-square"></i></a></li>-->
<!--                        <li><a href="{{$config->insta_link}}"><i class="fab fa-instagram-square"></i></a></li>-->
<!--                        <li><a href="{{$config->linkedin_link}}"><i class="fab fa-linkedin"></i></a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!-- Back to top button -->
<!--    <a id="TopScroll"><i class="fas fa-angle-up"></i></a>-->
<!--</footer>-->
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
<script src="{{url('assets-ui/js/slick.js')}}"></script>
<script src="{{url('assets-ui/js/jquery.slicknav.js')}}"></script>
<script src="{{url('assets-ui/js/jquery.fancybox.min.js')}}"></script>
<script src="{{url('assets-ui/js/wow.min.js')}}"></script>
<script src="{{url('assets-ui/js/custom.js')}}"></script>
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
</body>

</html>
