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
                                <form class="row g-3" action="{{route('signup_page')}}" method="POST">@csrf
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="User Name*" name="username">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="Email*" name="email">
                                    </div>
                                    <div class="col-6">
                                        <input type="password" class="form-control" placeholder="password*" name="password">
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
                        <form action="{{route('login_page')}}" method="POST">@csrf

                            <a href="{{route('login_google')}}" class="google btn">
                                <i class="fab fa-google-plus-g"></i>
                                </i> Login with Google+
                            </a>
                            <div class="orline">
                                <small>or</small>
                            </div>
                            <div class="col-md-12">
                                <input type="email" name="email" class="form-control" placeholder="Email*">
                            </div>
                            @if(Session::has('Failed_Email'))
                                <span class="text-danger" role="alert" >
                                <small> <strong>* {{Session::get('Failed_Email')}}</strong></small>
                           </span>
                            @endif
                            <div class="col-12">
                                <input type="password" name="password" class="form-control" placeholder="password*">
                            </div>
                            @if(Session::has('Failed_Password'))
                                <span class="text-danger" role="alert" >
                                 <small><strong>* {{Session::get('Failed_Password')}}</strong></small>
                           </span>
                            @endif
                            @if(Session::has('Failed_Empty'))
                                <span class="text-danger" role="alert" style="font-size: 20px !important" >
                                     <small><strong>* {{Session::get('Failed_Empty')}}</strong></small>
                                   </span>
                            @endif
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
<!--  Check-Out section starts-->
<section class="checkout-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="missionHeading wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                    <span>Checkout</span>
                    <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard-->
                    <!--    dummy text ever since the 1500s, when an unknown printer took a galley </p>-->
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-7">
                @if(Auth::id() === null)
                <div class="signup-heading">
                    <h3>1. Sign-Up</h3>
                    <p>To purchase this plan and use its benefits in the future, log in to your account or sign up.</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign Up</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Loginwithemail">Login</button>
                </div>

                <div class="payment-heading">
                    <h3>2. Payment</h3>
                </div>
                @else
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

                                    <form role="form" action="{{route('stripe.post')}}" method="post" class="require-validation"
                                          data-cc-on-file="false"
                                          data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                          id="payment-form">
                                        @csrf
                                        <input type="hidden" name="membership" value="{{$membership->id}}">
                                        <input type="hidden" name="price" value="{{$membership->price}}">
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
                                        <div class="read-agre">
                                            <div class="form-group">
                                                <label class="checkbox-inline"><input type="checkbox" checked value="1" required>I have read and agree to james-street
                                                    <a href="{{route('term_condition')}}" target="_blank" style="color: #d1a657; !important">terms & conditions</a> and  <a href="{{route('privacy_policy')}}"  target="_blank" style="color: #d1a657; !important">privacy policy</a>.</label>
                                            </div>
                                        </div>
                                        <div class='form-row row'>
                                            <div class='col-md-12 error form-group d-none'>
                                                <div class='alert-danger alert'>Please correct the errors and try
                                                    again.</div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12">

                                                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now (${{$newamount == 0 ? $membership->price : $newamount}})</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
            </div>

            <div class="col-md-5">
                <div class="order-heading">
                    <h3> Order Summary </h3>
                    <h5>Plan<span>{{$membership->title}}</span></h5>
                    <h6>Duration<span>Until Cancelled</span></h6>
                    <h4>Total<span>${{$newamount == 0 ? $membership->price : $newamount}}</span></h4>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<!--  Check-Out section ends -->
@include('layouts.footer_for_rest_pages')
