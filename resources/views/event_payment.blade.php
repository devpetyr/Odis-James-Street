@include('layouts.header_for_rest_pages')
<style>
    #test {
        position: fixed;

        left: 0;

        top: 0;

        z-index: 9999999;

        width: 100%;

        height: 100%;

        overflow: visible;

        background: rgb(255 255 255 / 65%) url("{{url('assets-ui/images/pre_loader.gif')}}") no-repeat center center;

        color: #000;

        display: none;
    }
</style>
<script>
    function myFunction() {
        document.getElementById("test").style.display = "block";
    }

</script>
<div class="preloader" id="test" ></div>
<!--  Check-Out section starts-->
<section class="checkout-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="missionHeading wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                    <span>Pay Now</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="panel panel-default credit-card-box">
                                <div class="panel-heading display-table" >
                                    <div class="row display-tr" >
                                        <h3 class="panel-title display-td" >Payment Details</h3>
                                        <div class="visa-cards">
                                            <ul>
                                                <li><img src="{{url('assets-ui/images/visa.png')}}" alt="visa.png"></li>
                                                <li><img src="{{url('assets-ui/images/card.png')}}" alt="card.png"></li>
                                                <li><img src="{{url('assets-ui/images/card2.png')}}" alt="card2.png"></li>
                                                <li>and more!</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    @if (Session::has('success'))
                                        <div class="alert alert-success text-center" id="al">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                                            <p>{{ Session::get('success') }}</p>
                                        </div>
                                    @endif

                                    <form role="form" action="{{route('stripe_events')}}" method="post" class="require-validation"
                                          data-cc-on-file="false"
                                          data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                          id="payment-form">
                                        @csrf
{{--                                        <input type="hidden" name="membership" value="{{$membership->id}}">--}}
{{--                                        <input type="hidden" name="price" value="{{$membership->price}}">--}}
                                        <div class='form-row row'>
                                            <div class='col-xs-12 form-group required'>
                                                <label class='control-label'>Name on Card</label>
                                                <input class='form-control' size='4' type='text'>
                                            </div>
                                        </div>

                                        <div class='form-row row'>
                                            <div class='col-xs-12 form-group card required'>
                                                <label class='control-label'>Card Number</label> <input
                                                    autocomplete='off' class='form-control card-number' maxlength="16" size='20'
                                                    type='text'>
                                            </div>
                                        </div>

                                        <div class='form-row row'>
                                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                                                                                class='form-control card-cvc' placeholder='ex. 311' maxlength="3" type='password'>
                                            </div>
                                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                <label class='control-label'>Expiration Month</label> <input
                                                    class='form-control card-expiry-month' maxlength="2" placeholder='MM' size='2'
                                                    type='text'>
                                            </div>
                                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                <label class='control-label'>Expiration Year</label> <input
                                                    class='form-control card-expiry-year' maxlength="4" placeholder='YYYY' size='4'
                                                    type='text'>
                                            </div>
                                        </div>

                                        <div class='form-row row'>
                                            <div class='col-md-12 error form-group d-none'>
                                                <div class='alert-danger alert'>Please correct the errors and try
                                                    again.</div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="id" value="{{$event_detail->id}}">
                                        <input type="hidden" name="email" value="{{$event_detail->email}}">
                                        <input type="hidden" name="total_price" value="{{$event_detail->total_price*$event_detail->quantity}}">
                                        <div class="row">
                                                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now (${{$event_detail->total_price}})</button>

                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-sm-4">
                    <div class="check_detail margin-set">
                        <div class="first">
                            <h3>event name</h3>
                            <h4>{{$event_detail->eventDetail->name}} <span>${{$event_detail->total_price}} x {{$event_detail->quantity}}</span></h4>
                        </div>

                        <h3>total price <span class="subTotal">${{$event_detail->total_price}}</span></h3>

                    </div>
            </div>



        </div>
    </div>
</section>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<!--  Check-Out section ends -->
@include('layouts.footer_for_rest_pages')
