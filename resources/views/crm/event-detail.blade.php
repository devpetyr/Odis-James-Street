@include('crm.layouts.header')
@push('css')
    <style>
        .modal {
            max-height: 90%;
        }

        .modal-form-row {
            margin-bottom: 0px;
        }
    </style>
    @endpush
<div class="main_table">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="main_tabs ">
                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" >Event-Details - ({{$event_name->name}}) </button>
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
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
       <div class=" newest">
               <ul class="list-inline pull-right">
                   <li><a href="JavaScrip:void(0)" class="btn btn_yellow" style="width: 150px !important;" data-bs-toggle="modal" data-bs-target="#exampleModal"> Add Customer</a></li>
               </ul>
           </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="yourstatus">
                <ul class="text-center">
                    <li>
                        <span>Event Name</span>
                        <small>
                            <p>{{$event_name->name}}</p>
                        </small>
                    </li>
                    <li>
                        <span>Tickets Price</span>
                        <small><p>{{$event_name->price}}</p></small>
                    </li>
                    <li>
                        <span>Tickets Sold</span>
                        <small><p>{{$tickets_sold}}</p></small>
                    </li>
                    <li>
                        <span>Event Date</span>
                        <small><p>{{$event_name->event_date}}</p></small>
                    </li>
                    <li>
                        <span>Event Time</span>
                        <small><p>{{$event_name->event_time}}</p></small>
                    </li>
                    <li>
                        <span>Event Address</span>
                        <small><p>{{$event_name->address}}</p></small>
                    </li>


                </ul>
            </div>
            <!--<div class="Pending">-->
            <!--    <span>Pending Payment</span>-->
            <!--    <div class="progress">-->
            <!--        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="weeklytop">
                <div></div>
            </div>
        </div>

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
                                <th>City</th>
                                <th>Phone</th>
                                <th>Quantity</th>
                                <th>Status</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($events as $key => $eventdata)
                                <tr>
                                    <td>
                                        <h2>{{$key+1}}</h2>
                                    </td>
                                    <td>{{$eventdata->first_name.' '.$eventdata->last_name}}</td>
                                    <td>{{$eventdata->city}}</td>
                                    <td>{{$eventdata->phone}}</td>
                                    <td>{{$eventdata->quantity}}</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">{{$eventdata->payment_status === 1 ? 'Paid' : 'Not-Paid'}}</a></td>

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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="{{route('crm_events_add_customer').'/'.Request::segment(3)}}" method="POST">@csrf
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" class="form-control" name="first_name" required>
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" class="form-control" name="last_name" required>
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" class="form-control" name="address" required>
                        <label for="exampleInputEmail1">City</label>
                        <input type="text" class="form-control" name="city" required>
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" class="form-control" name="phone" required>
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" name="email" required>
                        <label for="exampleInputEmail1">Postcode</label>
                        <input type="text" class="form-control" name="postcode" required>
                        <label for="exampleInputEmail1">Quantity</label>
                        <input type="hidden" class="form-control" name="total_price" value="{{$event_name->price}}">
                        <input type="text" class="form-control" name="quantity" required>
                        <div style="text-align: center">
                        <button type="button" class="btn btn_yellow" data-bs-dismiss="modal">Close</button>
                        <button type="Submit" class="btn btn_yellow">Save changes</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('crm.layouts.footer')
