@include('layouts.header_for_rest_pages')
    <section class="inner_banner">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
           <div class="banner_text wow fadeInDown" data-wow-duration="2s">
              <h1>Now Is Your Time</h1>
{{--              <a href="javascript:voids(0)" class="customBtn"> Find Your Next Event</a>--}}
           </div>
          </div>
        </div>
      </div>
    </section>
    <section class="event_list">
      <div class="container">

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2>Events</h2>
          </div>
            @foreach($events as $data)
          <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="event_div wow fadeIn" data-wow-duration="2s">
              <a href="{{route('event_detail')}}/{{$data->id}}"><img src="{{url('uploads/events/').'/'.$data->image}}" class="img-responsive" alt=""></a>
              <div class="heart"><a href="{{route('event_detail')}}/{{$data->id}}"><i class="fa fa-ticket-alt"></i></a></div>
              <div class="event_text">
                <h3>{{$data->name}}</h3>
                <h4>{!! htmlspecialchars_decode(date('l j F Y', strtotime($data->event_date))) !!}, <br> {{date( "g:i a", strtotime( $data->event_time ) )}}</h4>
                <p>{{$data->address}}</p>
                  <a href="javascript:vois(0)"> <i class="fas fa-money-bill"></i> <strong>{{$data->price}}$</strong></a><br>
{{--                  <a href="javascript:vois(0)"> <i class="fas fa-user"></i> 119 Counter</a>--}}

              </div>
            </div>
          </div>
            @endforeach
        </div>

      </div>
    </section>

    <!-- sq coading end -->
@include('layouts.footer_for_rest_pages')




