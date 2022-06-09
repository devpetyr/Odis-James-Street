@include('layouts.header')
@if(Session::has('sent'))
    <div class="myalert" id="al">
        <h2>{{Session::get('sent')}}</h2>
    </div>
@endif
@if(Session::has('event_payment'))
    <div class="myalert" id="al">
        <h2>{{Session::get('event_payment')}}</h2>
    </div>
@endif
@if(Session::has('reset-success'))
    <div class="myalert" id="al">
        <h2>{{Session::get('reset-success')}}</h2>
    </div>
@endif

<main>

    <!-- BEGIN Slider Section -->
    <section class="SliderMain">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{url('uploads/banners/').'/'.$bannerModel->images}}" class="d-block w-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="SliderContent">
                                {!!  $bannerModel->description  !!}
                                <a href="{{url('contact')}}"  class="wow fadeInUp" data-wow-delay="0.6contact.html">Contact Me</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="{{url('uploads/banners/').'/'.$bannerModel->images}}" class="d-block w-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="SliderContent">
                                {!!  $bannerModel->description  !!}
                                <a href="{{url('contact')}}"  class="wow fadeInUp" data-wow-delay="0.6contact.html">Contact Me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Slider Section -->
    <!-- BEGIN About Us Section -->
    <section class="AboutUs">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="AboutContent">
                        <span class="wow fadeInUp" data-wow-delay="0.2s">{{$CMSModel_section_1->title}}</span>
                        <small class="wow fadeInUp" data-wow-delay="0.3s">{{$CMSModel_section_1->sub_heading}}</small>
                        {!! $CMSModel_section_1->description_1 !!}
                        {!! $CMSModel_section_1->description_2 !!}
                        <a href="{{url('mentorship-plans-and-pricing')}}" class="customBtn wow fadeInUp" data-wow-delay="0.5s">Plans and Pricing</a>
                        <div class="jamescontent">
                            <p>{!! $CMSModel_section_golden_box->description_1 !!}</p>
                            <small>{!! $CMSModel_section_golden_box->description_2 !!}</small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="aboutimg">
                        <img src="{{url('uploads/cms/').'/'.$CMSModel_section_1->image_1}}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END About Us Section -->
    <!-- BEGIN James Section -->
    <section class="jamessec">
        <div class="container">
            <div class="jamesbox">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="jameshead wow fadeInUp" data-wow-delay="0.5s">
                            <span>{{$CMSModel_section_2_1->title}}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="OriginMain">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="origin wow fadeInLeft" data-wow-delay="0.5s">
                                        {!! $CMSModel_section_2_1->description_1 !!}
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="Industries wow fadeInLeft" data-wow-delay="0.6s">
                                        {!! $CMSModel_section_2_1->description_2 !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="OriginMain">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="origin wow fadeInLeft" data-wow-delay="0.5s">
                                        {!! $CMSModel_section_2_2->description_1 !!}
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="Industries wow fadeInLeft" data-wow-delay="0.6s">
                                        {!! $CMSModel_section_2_2->description_2 !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="OriginMain toppadd">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="Industries wow fadeInLeft" data-wow-delay="0.6s">
                                        {!! $CMSModel_section_2_3->description_1 !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="jamesbiglogo wow fadeInUp" data-wow-delay="0.6s">
                            <img src="{{url('uploads/cms/').'/'.$CMSModel_section_2_1->image_1}}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END James Section -->
    <!-- BEGIN Testimonial Section -->
    <!--<section class="TestimonialSec">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-12 col-sm-12 col-xs-12">-->
    <!--                <div class="mainHeading wow fadeInUp" data-wow-delay="0.6s">-->
    <!--                    <small>What People Are Saying</small>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-12 col-sm-12 col-xs-12">-->
    <!--                <div class="TestimonialSlider aos-init aos-animate" data-aos="zoom-in">-->
    <!--                @foreach($testimonials as $testimonialvalue)-->
                        <!-- Item -->
    <!--                        <div>-->
    <!--                            <div class="TestimonialBox wow fadeInUp" data-wow-delay="0.6s">-->
    <!--                                <ul>-->
    <!--                                    <li><a href="#"><i class="fas fa-star"></i></a></li>-->
    <!--                                    <li><a href="#"><i class="fas fa-star"></i></a></li>-->
    <!--                                    <li><a href="#"><i class="fas fa-star"></i></a></li>-->
    <!--                                    <li><a href="#"><i class="fas fa-star"></i></a></li>-->
    <!--                                    <li><a href="#"><i class="fas fa-star"></i></a></li>-->
    <!--                                </ul>-->
    <!--                                <p style="font-family: 'Poppins', sans-serif !important;">{!! $testimonialvalue->description !!}</p>-->
    <!--                            </div>-->
    <!--                            <div class="userimg">-->
    <!--                                <img src="{{url('uploads/testimonials/').'/'.$testimonialvalue->image}}" class="img-fluid">-->
    <!--                            </div>-->
    <!--                            <div class="userdetail">-->
    <!--                                <span>{{$testimonialvalue->name}}</span>-->
    <!--                                <small>{{$testimonialvalue->designation}}</small>-->
    <!--                            </div>-->
    <!--                            <div class="clearfix"></div>-->
    <!--                        </div>-->
                            <!-- Item -->
    <!--                    @endforeach-->

    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    
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
              <p style="font-family: 'Poppins', sans-serif !important;">
              <p>"What I love about Odis's mentorship is:</p>
              <p>
                1- He explains concepts so clearly that a 7 year old could execute the steps.
              </p>
              <p>
                2-He actively practices what he teaches and is brilliant!!!
              </p>
              <p>
                3-HE'S ALWAYS ACCESSIBLE &amp; WILL HOLD YOUR HAND THROUGH THE PROCESS."
              </p>
              </p>
            </div>
            <div class="userimg">
              <img src="https://www.thevitaldesigning.com/projects/james-street/public/uploads/testimonials/1625505430.jpg" class="img-fluid">
            </div>
            <div class="userdetail">
              <span>Sheba Coffey</span>
              <small></small>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- Item -->
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
              <p style="font-family: 'Poppins', sans-serif !important;">
              <p>"This program is more than just facts that can be found on your own or through research. The team brings experience and integrity but most of all the support that never leaves me feeling alone or lost on my individual Journey."</p>
              </p>
            </div>
            <div class="userimg">
              <img src="https://www.thevitaldesigning.com/projects/james-street/public/uploads/testimonials/1625505533.jpg" class="img-fluid">
            </div>
            <div class="userdetail">
              <span>Arthur Takeall</span>
              <small></small>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- Item -->
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
              <p style="font-family: 'Poppins', sans-serif !important;">
              <p>"Before Odis' program my wife and I were wholesaling.  We would always wholesale to other investors and never keep properties for ourselves.  Now we have strategies to keep these properties for ourselves.  Just to give you an example if we would have wholesaled this property we would have made $8000.  But now that we are keeping it for ourselves we will make $35,000!"</p>
              </p>
            </div>
            <div class="userimg">
              <img src="https://www.thevitaldesigning.com/projects/james-street/public/uploads/testimonials/1625505673.jpg" class="img-fluid">
            </div>
            <div class="userdetail">
              <span>Eli The Real Estate Guy</span>
              <small></small>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- Item -->
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
              <p style="font-family: 'Poppins', sans-serif !important;">
              <p>"What I love about Odis's mentorship is:</p>
              <p>
                1- He explains concepts so clearly that a 7 year old could execute the steps.
              </p>
              <p>
                2-He actively practices what he teaches and is brilliant!!!
              </p>
              <p>
                3-HE'S ALWAYS ACCESSIBLE &amp; WILL HOLD YOUR HAND THROUGH THE PROCESS."
              </p>
              </p>
            </div>
            <div class="userimg">
              <img src="https://www.thevitaldesigning.com/projects/james-street/public/uploads/testimonials/1625505430.jpg" class="img-fluid">
            </div>
            <div class="userdetail">
              <span>Sheba Coffey</span>
              <small></small>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- Item -->
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
              <p style="font-family: 'Poppins', sans-serif !important;">
              <p>"This program is more than just facts that can be found on your own or through research. The team brings experience and integrity but most of all the support that never leaves me feeling alone or lost on my individual Journey."</p>
              </p>
            </div>
            <div class="userimg">
              <img src="https://www.thevitaldesigning.com/projects/james-street/public/uploads/testimonials/1625505533.jpg" class="img-fluid">
            </div>
            <div class="userdetail">
              <span>Arthur Takeall</span>
              <small></small>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- Item -->
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
              <p style="font-family: 'Poppins', sans-serif !important;">
              <p>"Before Odis' program my wife and I were wholesaling.  We would always wholesale to other investors and never keep properties for ourselves.  Now we have strategies to keep these properties for ourselves.  Just to give you an example if we would have wholesaled this property we would have made $8000.  But now that we are keeping it for ourselves we will make $35,000!"</p>
              </p>
            </div>
            <div class="userimg">
              <img src="https://www.thevitaldesigning.com/projects/james-street/public/uploads/testimonials/1625505673.jpg" class="img-fluid">
            </div>
            <div class="userdetail">
              <span>Eli The Real Estate Guy</span>
              <small></small>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- Item -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END Testimonial Section -->
    <!-- BEGIN Mission Sec -->
    <section class="MissionMain">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="missionHeading wow fadeInUp" data-wow-delay="0.6s">
                        <span>{{$CMSModel_section_3_1->title}}</span>
                        <p>{{$CMSModel_section_3_1->sub_heading}}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="missionvideo  wow fadeInLeft"  data-wow-delay="0.6s">
                        <a target="_blank" href="{{url('uploads/cms/').'/'.$CMSModel_section_3_2->video_1}}" data-fancybox="gallery">

                            <img src="{{url('uploads/cms/').'/'.$CMSModel_section_3_2->image_1}}" class="img-fluid" style="border-radius: 20px;!important">
                            <i class="far fa-play-circle"><p>Play Video</p></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="missionvideocontent  wow fadeInRight" data-wow-delay="0.8s">
                        <span>{{$CMSModel_section_3_2->title}}</span>
                        {!! $CMSModel_section_3_2->description_1 !!}
                        <a href="{{url('book-odis-james')}}" class="customBtn">BOOK ODIS JAMES</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Mission Sec -->
    <!-- BEGIN Publication -->
    <section class="PublicationMain">
        <div class="container">
            <div class="PublicationSlider">
                <!-- Item -->
                    <!--@foreach($CMSModel_section_4 as $data)-->
                    <!--<div>-->
                    <!--    <div class="publicationText wow fadeInLeft" data-wow-delay="0.6s">-->
                    <!--        <span>{{$data->title}}</span>-->
                    <!--        <p>{!! $data->description_1 !!}</p>-->
                    <!--        <small>{!! $data->description_2 !!}</small>-->
                    <!--    </div>-->
                    <!--    <div class="publicationimg wow fadeInRight" data-wow-delay="0.8s">-->
                    <!--        <img src="{{url('uploads/cms/').'/'.$data->image_1}}" class="img-fluid">-->
                    <!--    </div>-->
                    <!--    <div class="clearfix"></div>-->
                    <!--</div>-->
                    <!--@endforeach-->
                                           <div>
                        <div class="publicationText wow fadeInLeft" data-wow-delay="0.6s">
                            <span>Publication</span>
                            <p><p>“It’s easy to believe when someone is referred to as an expert that they’ve done everything right. The truth is, there were times when the right way was the only way left to try.”</p></p>
                            <small>-Odis James</small>
                        </div>
                        <div class="publicationimg wow fadeInRight" data-wow-delay="0.8s">
                            <img src="https://www.thevitaldesigning.com/projects/james-street/public/uploads/cms/1623960178.png" class="img-fluid">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                                        <div>
                        <div class="publicationText wow fadeInLeft" data-wow-delay="0.6s">
                            <span>Speaking</span>
                            <p>“Most people are only a thought away from success and don’t realize it. A shift in perspective can be the difference between a life of meaning and fulfillment and a life of mediocrity. My passion is being the cause of that shift.”</p>
                            <small>-Odis James</small>
                        </div>
                        <div class="publicationimg wow fadeInRight" data-wow-delay="0.8s">
                            <img src="https://www.thevitaldesigning.com/projects/james-street/public/uploads/cms/1625082541.png" class="img-fluid">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                                                            <div>
                        <div class="publicationText wow fadeInLeft" data-wow-delay="0.6s">
                            <span>Publication</span>
                            <p><p>“It’s easy to believe when someone is referred to as an expert that they’ve done everything right. The truth is, there were times when the right way was the only way left to try.”</p></p>
                            <small>-Odis James</small>
                        </div>
                        <div class="publicationimg wow fadeInRight" data-wow-delay="0.8s">
                            <img src="https://www.thevitaldesigning.com/projects/james-street/public/uploads/cms/1623960178.png" class="img-fluid">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                                        <div>
                        <div class="publicationText wow fadeInLeft" data-wow-delay="0.6s">
                            <span>Speaking</span>
                            <p>“Most people are only a thought away from success and don’t realize it. A shift in perspective can be the difference between a life of meaning and fulfillment and a life of mediocrity. My passion is being the cause of that shift.”</p>
                            <small>-Odis James</small>
                        </div>
                        <div class="publicationimg wow fadeInRight" data-wow-delay="0.8s">
                            <img src="https://www.thevitaldesigning.com/projects/james-street/public/uploads/cms/1625082541.png" class="img-fluid">
                        </div>
                        <div class="clearfix"></div>
                    </div>
            </div>
        </div>
    </section>
    <!-- END Publication -->
    <!-- BEGIN Home Contact -->
    <section class="ContactMain">
        <div class="container">
            <div class="contactbg">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="contactForm wow fadeInUp" data-wow-delay="0.8s">
                            <div class="contacthead">
                                <span>Make An Appointment</span>
                                <p>Feel free to drop us a line below!</p>
                            </div>
                            <form class="row g-3" action="{{route('appointments_page')}}" method="POST">@csrf
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="First Name*" name="first_name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Last Name*" name="last_name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" placeholder="Phone no.*" name="phone_no" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Email*" name="email" required>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="Subject*" name="subject">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="Company*" name="company">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" placeholder="Your message here" name="message"></textarea>
                                </div>
                                @if(Session::has('success'))
                                    <div class="alert alert-success" id="al">
                                        {{Session::get('success')}}
                                    </div>
                                @endif
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="contactdetail wow fadeInRight" data-wow-delay="0.9s">
                            <span>Contact Us</span>
                            <ul>
                                <li><a href="#"><i class="fas fa-home"></i> {{$config->address}}</a></li>
                                <li><a href="#"><i class="fas fa-envelope-open-text"></i> {{$config->email}}</a></li>
                                <li><a href="#"><i class="fas fa-phone-alt"></i> {{$config->phone}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Home Contact -->
    <!-- BEGIN Video Section -->
    <section class="VideoSec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="videoSlider">
                    @foreach($CMSModel_section_5 as $cmsValue)
                        <!-- Item -->
                            <div>
                                <div class="missionvideo wow fadeInUp" data-wow-delay="0.7s">
                                    <a data-fancybox="gallery" href="{{url('uploads/cms/').'/'.$cmsValue->video_1}}">
                                        <img src="{{url('uploads/cms/').'/'.$cmsValue->image_1}}" class="img-fluid" style="height: 250px;!important">
                                        <i class="far fa-play-circle"><p>Play Video</p></i>
                                    </a>
                                    <small>{{$cmsValue->title}}</small>
                                </div>
                            </div>
                            <!-- Item -->
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Video Section -->
    <!-- BEGIN Logos Sec -->
    <section class="FeaturedSec">
        <div class="container">
            <div class="row">
                <div class="co,col-md-12 col-sm-12">
                    <div class="featuredlogo wow fadeInUp" data-wow-delay="0.9s">
                        <span>At Featured In</span>
                        <ul>
                            <li><img src="{{url('assets-ui/')}}/images/featured1.png" class="img-fluid"></li>
                            <li><img src="{{url('assets-ui/')}}/images/featured2.png" class="img-fluid"></li>
                            <li><img src="{{url('assets-ui/')}}/images/featured3.png" class="img-fluid"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Logos Sec -->
</main>
@include('layouts.footer')
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
</script>
