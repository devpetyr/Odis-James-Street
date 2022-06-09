@include('layouts.header_for_rest_pages')

<!-- Contact-form section starts -->
<section class="form-portion">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="missionHeading wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                    <span>Real Estate Professionals Network</span>
{{--                    <p>Feel free to contact us anytime with questions about the program. If you’re needing to discuss real estate related topics, please request a consultation. </p>--}}
                </div>
            </div>
        </div>
        <div class="formcontact">
            <form class=" " action="{{route('realStateInvestorsPost_page')}}" method="POST">@csrf
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input required type="text" class="form-control"  name="name" placeholder="Your name">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input required type="email" class="form-control" name="email" placeholder="Your Email address">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input required type="tel" class="form-control" name="phone" placeholder="Your Phone No:">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input required type="text" class="form-control" name="website" placeholder="Your Website">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input required type="text" class="form-control" name="city_state" placeholder="Your City & State Your Business In">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input required type="number" class="form-control" name="license_number" placeholder="Your License Number">
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
