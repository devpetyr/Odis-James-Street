@include('layouts.header_for_rest_pages')

<style>
    
    .generic_content.clearfix {
    margin-bottom: 25px;
}
</style>
<!-- Pricing section starts -->
<section id="generic_price_table">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--PRICE HEADING START-->
                <div class="price-heading clearfix">
                    <h1>Mentorship Plans And Pricing</h1>
                </div>
                <!--//PRICE HEADING END-->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @if(count($Membership) < 1)
            <div class="consultation-para">
                <p> Congratulations You've selected our most popular premium package that contains all the services. You need nothing else once you have it in your bucket.</p>
            </div>
            @endif
            
            @foreach($Membership as $membershipData)
            
                <div class="col-md-4 box">
                    @if(count($Membership)>=2)
                    {!! $membershipData == $Membership[1]? '<div class="most"><a href="javascript:void(0)"> Most Popular</a> </div>' : '' !!}
                    @endif
                    <div class="generic_content clearfix">

                        <div class="generic_head_price clearfix">
                            <div class="generic_head_content clearfix">
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span>{{$membershipData->title}}</span>
                                </div>
                            </div>
                            <div class="generic_price_tag clearfix">
                      <span class="price">
                        <span class="month">{{$membershipData->sub_heading}}</span>
                          <span class="sign">$</span>
                          <span class="currency">{{$membershipData->price}}</span>
                          <span class="cent">.00</span>
                      </span>
                            </div>
                        </div>
                        <div class="generic_feature_list">
                            {!! $membershipData->description !!}
                        </div>
                        <div class="generic_price_btn clearfix">
                            <a class="" href="{{url('checkout/'.$membershipData->id)}}">Select Plan</a>
                        </div>
                    </div>
                </div>
            @endforeach
            

        </div>
    </div>
</section>
<!-- Pricing section Ends -->


@include('layouts.footer_for_rest_pages')
