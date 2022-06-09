@include('layouts.header_for_rest_pages')

    <!-- Contact-form section starts -->
    <section class="form-portion">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="missionHeading wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                        <span>For Booking Information "Interviews and Live Events"</span>
                        <p>Please fill out the form below and one of our team members will contact you!</p>
                    </div>
                </div>
            </div>
            <div class="formcontact">

                <form class=" g-3" action="{{route('appointments_page')}}" method="POST">@csrf
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control"  name="first_name" placeholder="Your name" required>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" name="last_name" placeholder="Your last name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <input type="email" class="form-control" name="email" placeholder="Your Email address" required>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="number" class="form-control" name="phone_no" placeholder="Phone No:" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" name="subject" placeholder="Subject">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" name="company" placeholder="Company">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <textarea class="form-control" name="message" placeholder="Write something.."></textarea>
                        </div>
                    </div>
                    @if(Session::has('success'))
                        <div class="alert alert-success" id="al">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <div class="form-button">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Contact-form section ends -->
@include('layouts.footer_for_rest_pages')
