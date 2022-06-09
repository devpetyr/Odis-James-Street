@include('crm-client.layouts.header')
<div class="main_table">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="main_tabs ">
                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">All Sharings</button>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('assets-ui/images/icon1.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <a href="{{route('crm_client_sharing_details_page',['category'=>'Mentorship Lessons'])}}" class="btn btn-primary">Mentorship Lessons</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('assets-ui/images/icon2.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <a href="{{route('crm_client_sharing_details_page',['category'=>'Zoom Recordings'])}}" class="btn btn-primary">Zoom Recordings</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('assets-ui/images/icon3.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <a href="{{route('crm_client_sharing_details_page',['category'=>'Instructional Videos'])}}" class="btn btn-primary">Instructional Videos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('assets-ui/images/icon4.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <a href="{{route('crm_client_sharing_details_page',['category'=>'Investor Tools'])}}" class="btn btn-primary">Investor Tools</a>
                        </div>
                    </div>
                </div>
            </div>
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
