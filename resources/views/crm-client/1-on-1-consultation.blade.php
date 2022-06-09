@include('crm-client.layouts.header')
<div class="main_table">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="main_tabs ">
                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">1 ON 1 CONSULTATION</button>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <div class="consultation-heading">
                    <h1>1 On 1 Consultation</h1>
                </div>
                <div class="consultation-para">
                    <p> A 30 minute Q/A style consultation led by you<span><br>Schedules Today!</span></p>
                </div>
                @if (Session::has('scheduled'))
                    <div class="alert alert-success text-center" id="al">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                        <p>{{Session::get('scheduled')}}</p>
                    </div>
                @endif
                <div class="consultation-button">
                    <form id="booking-time">
                        @csrf
                        <div  id="time-div">
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
                            <div class="row form-group col-sm-3 pt-3">
                                <a class="btn btn-primary" href="javascript:void(0)" id="check-btn">Check Now</a>
                            </div>
                        </div>
                    </form>
                    <div id="sc-btn">
                    <div id="profile-tab">
                        <form action="{{route('crm_client_addschedule')}}" method="POST">@csrf
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="exampleInputEmail1">Full Name *</label>
                                    <input type="text" required="" class="form-control" name="fullname" value="{{Auth()->user()->username}}">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="exampleInputEmail1">Email *</label>
                                    <input type="text" required="" class="form-control" name="email" value="{{Auth()->user()->email}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label for="exampleInputEmail1">Address *</label>
                                    <input type="text" required="" class="form-control" name="address">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="exampleInputEmail1">Phone No *</label>
                                    <input type="text" class="form-control" name="phone_no" value="{{Auth()->user()->phone}}">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="exampleInputEmail1">Country *</label>
                                    <input type="text" class="form-control" name="country">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label for="exampleInputEmail1">City *</label>
                                    <input type="text" required="" value="" class="form-control" name="city">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="exampleInputEmail1">State *</label>
                                    <input type="text" required="" value="" class="form-control" name="state">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="exampleInputEmail1">Zip *</label>
                                    <input type="text" required="" value="" class="form-control" name="zip">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label for="exampleInputEmail1">Note</label>
                                    <textarea class="form-control" name="note"></textarea>
                                </div>
                            </div>
                            <div class="row form-group col-sm-3 ">
                                    <button type="submit" class="btn btn-primary" >Schedule Now</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
{{--                <div class="consultation-description">--}}
{{--                    <p>I love speaking about matters of real estate! Unfortunately, there are only so many minutes in a day so let’s be sure to get the most out of them. Here are a few suggestions to ensure we get the most out of our time together.</p>--}}

{{--                </div>--}}
{{--                <ol class="text-left"  >--}}
{{--                    <li>--}}
{{--                        <p class="text-justify" style="font-size:12px;" >1. <span >Avoid questions you could have Googled. I love answering all questions, but you work hard for your money and I want to make sure it’s spent wisely. I suggest doing an internet search for basic questions.</span><span style="font-size:16px">&ZeroWidthSpace;</span></p>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <p class="text-justify" style="font-size:12px;" >2. <span >I love hearing about personal experiences, back stories, and people’s perspectives. I want you to get the most out of our time so keeping on topic will ensure you obtain the most information during the time we have together.</span><span style="font-size:16px">&ZeroWidthSpace;</span></p>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <p class="text-justify" style="font-size:12px;" >3. <span >Try to keep our appointment. In the world of real estate investing (and entrepreneurship in general) we must adapt and be flexible. I understand life happens so if you need to reschedule, simply send me an email (or text) and I will try to accommodate. I would ask that you allow me the same courtesy should I have to reschedule.</span></p>--}}
{{--                    </li>--}}
{{--                </ol>--}}
            </div>
        </div>
</div>
</div>
</div>
</div>
</section>
<!-- END Main Dashboard Section -->
</main>
@include('crm-client.layouts.footer')
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


