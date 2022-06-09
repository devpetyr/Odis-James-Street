@include('layouts.header_for_rest_pages')
<div class="preloader" id="test" ></div>
<!-- Schedule Modal -->
<!-- Modal -->
<div class="scheduleModal">

    <div class="modal fade" id="ScheduleM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>
                    <form role="form" action="{{route('stripe.schedule.post')}}" method="POST" class="require-validation"
                          data-cc-on-file="false"
                          data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                          id="payment-form">@csrf
                        <input type="hidden" name="price" value="{{$config->mins_price}}">
                        <!-- One "tab" for each step in the form: -->

                        <div class="tab">
                            <div class="tabesheading">
                                <span>1. Your Details</span>
                            </div>
                            <label>*Email:</label>
                            <input placeholder="" oninput="this.className = ''" name="email" style="width: 100%" required>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>*First Name</label>
                                    <input placeholder="" oninput="this.className = ''" name="firstname" style="width: 100%" required>
                                </div>
                                <div class="col-md-6">
                                    <label>*Last Name</label>
                                    <input placeholder="" oninput="this.className = ''" name="lastname" style="width: 100%" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>*Country</label>
                                    <select class="form-select" aria-label="Default select example" name="country" required>
                                        <option value="USA">USA</option>
                                        <option value="UK">UK</option>
                                        <option value="France">France</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>*Phone No</label>
                                    <input placeholder="" oninput="this.className = ''" name="phone_no" style="width: 100%" required>
                                </div>
                            </div>
                        </div>
                        <div class="tab">
                            <div class="tabesheading">
                                <span>2. Payment Method</span>
                            </div>
                            <div class="credits">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked required>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Credit/Debit Cards
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="visa-cards">
                                            <ul>
                                                <li><img src="{{url('/assets-ui/')}}/images/visa.png" alt="visa.png"></li>
                                                <li><img src="{{url('/assets-ui/')}}/images/card.png" alt="card.png"></li>
                                                <li><img src="{{url('/assets-ui/')}}/images/card2.png" alt="card2.png"></li>
                                                <li>and more!</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab">
                            <div class="tabesheading">
                                <span>3. Payment Details</span>
                                <small><i class="fas fa-lock"></i> Your payment is secure.</small>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label>Card Number</label>
                                    <input placeholder="Enter Card Number" class="card-number" maxlength="16"  name="" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <label>Expiration Month</label>
                                    <input class='card-expiry-month' placeholder='MM' size='2' type='text' maxlength="2" required>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <label>Expiration Year</label>
                                    <input class='card-expiry-year' placeholder='YYYY' size='2' maxlength="4" type='text' required>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <label>Security Code (CVV)</label>
                                    <input placeholder="XXX" type="password" class="card-cvc" maxlength="3" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label>Card Holder Name</label>
                                    <input placeholder="" oninput="this.className = ''" name="card_holder_name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label>Address</label>
                                    <input placeholder="" oninput="this.className = ''" name="address" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label>City</label>
                                    <input placeholder="" oninput="this.className = ''" name="city" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label>State</label>
                                    <input placeholder="" oninput="this.className = ''" name="state" required>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-12 col-sm-12">
                                    <label>Zip / Postal Code</label>
                                    <input placeholder="" oninput="this.className = ''" name="zip" required>

                                </div>
                            </div>
                            <div class="read-agre">
                                <div class="col-md-12 col-sm-12">
                                    <input type="checkbox" checked value="1" required>I have read and agree to james-street
                                        <a href="{{route('term_condition')}}" target="_blank" style="color: #d1a657; !important">terms & conditions</a> and  <a href="{{route('privacy_policy')}}"  target="_blank" style="color: #d1a657; !important">privacy policy</a>.
                                </div>
                            </div>
                        </div>
                        <div class='form-row row'>
                            <div class='col-md-12 error form-group d-none'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                        </div>
                        <div style="overflow:auto;">
                            <div style="float:center">
                                <div class="continue-button">
                                    <button class="d-none" type="submit" id="payBtn" style="width: 100%">Pay</button>
                                    <button class="d-block" type="button" id="nextBtn" onclick="nextPrev(1)" style="width: 100%">Continue</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        // if (n == 0) {
        //     document.getElementById("prevBtn").style.display = "none";
        // } else {
        //     document.getElementById("prevBtn").style.display = "inline";
        // }
        if (n == (x.length - 1)) {

            document.getElementById("nextBtn").classList.add("d-none");
            document.getElementById("payBtn").classList.remove('d-none');
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }
    var myformtab;
    function nextPrev(n) {

        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        console.log(currentTab);
        if(currentTab<=1)
        {
            x[currentTab].style.display = "none";
        }

        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        console.log(currentTab);
        // if you have reached the end of the form...

        if (currentTab >= x.length) {
            // ... the form gets submitted:
            //document.getElementById("payment-form").submit();
            schedule();
            return false;
        }
        // Otherwise, display the correct tab:
        if(currentTab<=2)
        {

            showTab(currentTab);
        }

    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
</script>
<!-- Modal -->

<main>
    <!-- Consultation section starts -->
    <section>
        <div class="container">
            <div class="consultation">
                <div class="row">
                    <dir class="col-md-12">
                        <div class="consultation-heading">
                            <h1>1 On 1 Consultation</h1>
                        </div>
                        <div class="consultation-para">
                            <p> A 30 minute Q/A style consultation led by you<span><br>Schedules Today! (${{$config->mins_price}}) </span></p>
                        </div>
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center" id="al">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                                <p>Successfully scheduled consultation</p>
                            </div>
                        @endif
                        <div class="consultation-button">
                            <form id="booking-time">
                                @csrf
                            <div class="row" id="time-div">
                                <div class="row">
                                    <div class="col-md-4">
                                        <labe>Select Time</labe>
                                        <select name="time" class="form-control">
                                            @foreach($slots as $slot)
                                            <option value="{{$slot['start'].'-'.$slot['end']}}">{{$slot['start'].'-'.$slot['end']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <labe>Select Date</labe>
                                        <input class="form-control" id="dt-in" type="date" name="date">
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-sm-12 ">
                                        <center>
                                        <a class="customBtn" href="javascript:void(0)" id="check-btn">Check Now</a>
                                        </center>
                                    </div>
                                </div>
                            </div>
                              </form>
                            <a class="customBtn" href="javascript:void(0)" id="sc-btn" data-bs-toggle="modal" data-bs-target="#ScheduleM">Schedule Now</a>

                        </div>
                        <div class="consultation-description">
                            <p>I love speaking about matters of real estate! Unfortunately, there are only so many minutes in a day so let’s be sure to get the most out of them. Here are a few suggestions to ensure we get the most out of our time together.</p>

                        </div>
                        <ol class="text-left"  >
                            <li>
                                <p class="text-justify" style="font-size:12px;" >1. <span >Avoid questions you could have Googled. I love answering all questions, but you work hard for your money and I want to make sure it’s spent wisely. I suggest doing an internet search for basic questions.</span><span style="font-size:16px">&ZeroWidthSpace;</span></p>
                            </li>
                            <li>
                                <p class="text-justify" style="font-size:12px;" >2. <span >I love hearing about personal experiences, back stories, and people’s perspectives. I want you to get the most out of our time so keeping on topic will ensure you obtain the most information during the time we have together.</span><span style="font-size:16px">&ZeroWidthSpace;</span></p>
                            </li>
                            <li>
                                <p class="text-justify" style="font-size:12px;" >3. <span >Try to keep our appointment. In the world of real estate investing (and entrepreneurship in general) we must adapt and be flexible. I understand life happens so if you need to reschedule, simply send me an email (or text) and I will try to accommodate. I would ask that you allow me the same courtesy should I have to reschedule.</span></p>
                            </li>
                        </ol>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Consultation section ends -->
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

@include('layouts.footer_for_rest_pages')
<script>
    $(document).ready(function(){
        $('#sc-btn').hide();
        $('#check-btn').click(function(){

            if($('#dt-in').val()=='')
            {
                alert('Please Select Time');
            }
            else
            {
                var edata =  $('#booking-time').serialize();
                $.post( '{{route('time.session')}}', edata)
                .done(function( data )
                {
                    if(data.status==1)
                    {
                        $('#time-div').hide();
                        $('#sc-btn').show();
                    }
                    else
                    {
                        alert(data.msg);
                    }

                })
            }

        });


    })
</script>
