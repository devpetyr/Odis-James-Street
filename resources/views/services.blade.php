@include('layouts.header_for_rest_pages')

    <!--  Check-Out section starts-->
    <section class="ServicesMain">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="missionHeading wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                        <span>Expertise</span>
                        <p>Odis is well versed in multiple facets of real estate and entrepreneurship. His vast experience allows him to create opportunities rather than search for them. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($services as $serviceData)
                    <div class="col-md-4 col-sm-4">
                        <div class="estate-heading">
                            <img src="{{url('uploads/services/').'/'.$serviceData->image}}" class="img-fluid">
                            <span>{{$serviceData->name}}</span>
                            <div class="estate-para">
                                {!! $serviceData->description  !!}
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </section>

    <!--  Check-Out section ends -->


@include('layouts.footer_for_rest_pages')
