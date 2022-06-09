@include('layouts.header_for_rest_pages')
    <section class="inner_banner">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
           <div class="banner_text wow fadeInDown" data-wow-duration="2s">
              <h1>Now Is Your Time</h1>
           </div>
          </div>
        </div>
      </div>
    </section>
 <section class="inner-cart">
     <div class="row">
         <div class="col-md-12 col-sm-12">
             <div class="missionHeading wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                 <span>Event Checkout</span>
             </div>
         </div>
     </div>
      <div class="body-space">
        <div class="container">
          <div class="check-form">
            <div class="row">
              <div class="col-md-7 col-sm-7 col-xs-12 wow fadeInLeft" data-wow-delay="1s" >
                <form action="{{route('event_checkout_data')}}" method="POST">@CSRF
                  <div class="row">
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input class="form-control" placeholder="First Name" type="text" name="first_name" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input class="form-control" placeholder="Last Name" type="text" name="last_name" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input class="form-control" placeholder="Address" type="text" name="address" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input class="form-control" placeholder="Town / City" type="text" name="city" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input class="form-control" placeholder="Phone" type="number" name="phone" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input class="form-control" placeholder="Email" type="email" name="email" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input class="form-control" placeholder="Postcode" type="text" name="postcode" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea class="form-control" placeholder="Order Note" rows="10" name="ordernote"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="read-agre">
                    <div class="form-group">
                      <label class="checkbox-inline"><input type="checkbox" checked value="1" required>I have read and agree to james-street
                        <a href="{{route('term_condition')}}" target="_blank" style="color: #d1a657; !important">terms & conditions</a> and  <a href="{{route('privacy_policy')}}"  target="_blank" style="color: #d1a657; !important">privacy policy</a>.</label>
                    </div>
                  </div>
                    <input type="hidden" name="total_price" value="{{$event_detail->price*session()->get('quantity')}}">
                    <div class="row">
                    <button class="btnord" type="submit"><span>Proceed to payments</span></button>
                    </div>
                </form>
              </div>
              <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="check_detail">
                  <div class="first">
                    <h3>event name</h3>
                    <h4>{{$event_detail->name}} <span>${{$event_detail->price}} x {{session()->get('quantity')}}</span></h4>
                  </div>
                    <input type="hidden" name="total_price" value="{{$event_detail->price*session()->get('quantity')}}">
                  <h3>total price <span class="subTotal">${{$event_detail->price*session()->get('quantity')}}</span></h3>
                  <form action="" class="round-one">
                    <input name="stripe" type="radio" value="stripe" checked required> Credit/Debit Card <img alt="" class="img-responsive" src="{{asset('assets-ui/images/pay.png')}}">

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@include('layouts.footer_for_rest_pages')
