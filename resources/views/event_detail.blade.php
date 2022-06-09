@include('layouts.header_for_rest_pages')
<!-- sq coading start -->


<section class="inner_banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="banner_text wow fadeInDown" data-wow-duration="2s">
                    <h1>Now Is Your Time</h1>
{{--                    <a href="javascript:voids(0)" class="customBtn"> Find Your Next Event</a>--}}
                </div>
            </div>
        </div>
    </div>
</section>



<section class="event_detail">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 centerCol">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-8 ">
                        <div class="detail_div">
                            <img src="{{url('uploads/events/').'/'.$events->image}}" class="img-responsive" alt="">
                            <ul class="">
                                <li><a href="javascript:void(0)"><i class="fas fa-share"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="far fa-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 ">
                        <div class="right_div">
                            <p>{!! htmlspecialchars_decode(date('l j<\s\up>S</\s\up> F Y', strtotime($events->event_date))) !!}, {{date( "g:i a", strtotime( $events->event_time ) )}}</p>
                            <div class="clearfix"></div>
                            <h3>{{$events->name}}</h3>
{{--                            <p>13868 followers </p>--}}
                            <h3><i class="fas fa-money-bill"></i> <strong>{{$events->price}}$</strong></h3><br>
                            <!--<span>{!!  $events->description !!}</span>-->
                            <div class="clearfix"></div>
                        </div>
                        <a href="javascript:void(0)" class="customBtn"  data-bs-toggle="modal" data-bs-target="#exampleModal1">Ticket ({{$events->price}}$)</a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <div class="tips_text">
                            <div class="clearfix"></div>
                            <h3>{{$events->name}}</h3>
                            <p>13868 followers </p>

                            <p>{!!  $events->description !!}</p>

                            <div class="social_icon">
                                <h3>Share with friends</h3>
                                <ul>
                                    <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fab fa-facebook-messenger"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fas fa-envelope-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="date_div">
                            <h5>Date and time</h5>
                            <ul>
                                <li>{!! htmlspecialchars_decode(date('l j<\s\up>S</\s\up> F Y', strtotime($events->event_date))) !!}</li>
                                <li>{{date( "g:i a", strtotime( $events->event_time ) )}}</li>
                            </ul>
                            <h5>Location</h5>
                            <ul>
{{--                                <li>(ONLINE EVENT)</li>--}}
                                <li>{{$events->address}}</li>
                                <li><a href="#map">View Map</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>

            </div>
        </div>
    </div>
</section>

<section class="map_sec" id="map">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="map_div ">
                    <iframe src="https://maps.google.com/maps?q={{$events->longitude_latitude}}&z=15&output=embed" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="list_sec">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3>Other events you may like</h3>
                <div class="blogslid slick-initialized slick-slider slick-dotted">
                    <div class="blogsid">
                        @foreach($events_listing as $data)
                            <div class="slick-track" style="opacity: 1; width: 2268px; transform: translate3d(0px, 0px, 0px);">
                                <div class="event_div wow fadeIn" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeIn;">
                                    <a href="{{route('event_detail')}}/{{$data->id}}"><img src="{{url('uploads/events/').'/'.$data->image}}" class="img-responsive" alt=""></a>
                                    <div class="heart"><a href="{{route('event_detail')}}/{{$data->id}}"><i class="fa fa-ticket-alt"></i></a></div>
                                    <div class="event_text">
                                        <h3>{{$data->name}}</h3>
                                        <h4>{!! htmlspecialchars_decode(date('l j F Y', strtotime($data->event_date))) !!}, <br> {{date( "g:i a", strtotime( $data->event_time ) )}}</h4>
                                        <p>{{$data->address}}Starts at $100.00</p>
                                        <a href="javascript:vois(0)" tabindex="0"> <i class="fas fa-user"></i> 119 Counter</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<div class="main_modal">
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 pdo">
                                <div class="modal_text">
                                    <h3>{{$events->name}}</h3>
                                    <p class="text-center"> {!! htmlspecialchars_decode(date('l j<\s\up>S</\s\up> F Y', strtotime($events->event_date))) !!}</p>
                                    <p class="text-center"> {{date( "g:i a", strtotime( $events->event_time ) )}}</p>
                                    <hr>
                                    <div class="dbl">
                                        <form action="{{route('event_buy_now')}}" method="POST">@csrf
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 pdo">
                                                <div class="addmi">
                                                    <h4>{{$events->name}}</h4>
                                                    <span>{!!  $events->description !!}</span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pdo">
                                                <label class="pull-left lbil">Quantity:</label>
                                                <div class="quantity">
                                                    <input name="event" type="hidden" value="{{$events->id}}">
                                                    <input name="quantity" type="text" class="quantity__input" minlength="1" value="1" id="quantity">
                                                    <a href="#" class="quantity__minus"><span><i class="fa fa-angle-up"></i></span></a> <a href="#" class="quantity__plus"><span><i class="fa fa-angle-down"></i></span></a> </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="buy"><button type="submit" class="customBtn">Proceed To Checkout</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 pdo">
                                <div class="modal_right">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                                    <img src="{{url('uploads/events/').'/'.$events->image}}" class="img-responsive" alt="">
                                    <div class="date_div">
                                        <h5>Date and time</h5>
                                        <ul>
                                            <li>{!! htmlspecialchars_decode(date('l j<\s\up>S</\s\up> F Y', strtotime($events->event_date))) !!}</li>
                                            <li>{{date( "g:i a", strtotime( $events->event_time ) )}}</li>
                                        </ul>
                                        <h5>Location</h5>
                                        <ul>
                                            <li>{{$events->address}}</li>
                                            <li><a href="#map">View Map</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="">

                </div>
            </div>
        </div>
    </div>



<!-- sq coading end -->








@include('layouts.footer_for_rest_pages')
