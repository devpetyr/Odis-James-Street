@include('crm.layouts.header')
<div class="main_table">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="main_tabs ">
                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">All Status</button>
                    </li>
                    <!--<li class="nav-item" role="presentation">-->
                    <!--    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Delievered</button>-->
                    <!--</li>-->
                    <!--<li class="nav-item" role="presentation">-->
                    <!--    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Canceled</button>-->
                    <!--</li>-->
                    <!--<li class="nav-item" role="presentation">-->
                    <!--    <button class="nav-link" id="contact-tab2" data-bs-toggle="tab" data-bs-target="#contact2" type="button" role="tab" aria-controls="contact" aria-selected="false">Pending</button>-->
                    <!--</li>-->
                </ul>
            </div>
        </div>
        <!--<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">-->
        <!--    <div class=" newest">-->
        <!--        <ul class="list-inline pull-right">-->
        <!--            <li><a href="JavaScrip:void(0)" class="btn btn_yellow"> New Order</a></li>-->
        <!--            <li><a href="JavaScrip:void(0)" class="btn btn_yellow b">Newest <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>-->
        <!--        </ul>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="table-responsive ">
                        <table class="table table-bordered row-border" id="myTable" width="100%" >
                            <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Name</th>
                                <th>Event Date</th>
                                <th>Event Time</th>
                                <th>Ticket</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($events as $key => $eventdata)
                                <tr>
                                    <td>
                                        <h2>{{$key+1}}</h2>
                                    </td>
                                    <td>{{$eventdata->name}}</td>
                                    <td>{{$eventdata->event_date}}</td>
                                    <td>{{$eventdata->event_time}}</td>
                                    <td>${{$eventdata->price}}</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">{{$eventdata->status === 1 ? 'Active' : 'Inactive'}}</a></td>
                                    <td><a href="{{url('crm/event-detail/'.$eventdata->id)}}" class="v">View Details</a></td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
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
@include('crm.layouts.footer')
