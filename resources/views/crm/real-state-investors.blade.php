@include('crm.layouts.header')
<div class="main_table">
    @if(Session::has('success'))
        <div class="alert alert-danger text-center" id="al">
            <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
            <p>{{ Session::get('success') }}</p>
        </div>
    @endif
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="main_tabs ">
                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Real Estate Professionals Network</button>
                    </li>
                </ul>
            </div>
        </div>
{{--        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">--}}
{{--            <div class=" newest us">--}}
{{--                <ul class="list-inline pull-right">--}}
{{--                    <li></li>--}}
{{--                    <li><a href="{{route('crm_user_add')}}" class="btn btn_yellow b">Add New User</i></a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="table-responsive">
                        <table class="table table-bordered row-border" id="myTable" width="100%">
                            <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Website</th>
                                <th>City & State</th>
                                <th>License Number</th>
{{--                                <th>Action</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($referals as $key => $referalData)
                                <tr>
                                    <td>
                                        <h2>{{$key+1}}</h2>
                                    </td>
                                    <td>{{$referalData->name}}</td>
                                    <td>{{$referalData->email}}</td>
                                    <td>{{$referalData->phone}}</td>
                                    <td>{{$referalData->website}}</td>
                                    <td>{{$referalData->city_state}}</td>
                                    <td>{{$referalData->license_number}}</td>
                                    <!--<td><a href="JavaScript:void(0)" class="btn btn_yellow">Received</a></td>-->
{{--                                    <td><a href="JavaScript:void(0)" data-id="{{$referalData->id}}" data-bs-toggle="modal" data-bs-target="#exampleModal" class="v">Add / Edit</a></td>--}}
{{--                                    <td>--}}
{{--                                        <div class="img_div">--}}
{{--                                        <!--<a href="{{url('crm/user-detail/').'/'.$referalData->id}}">-->--}}
{{--                                        <!--    <img src="{{url('assets-crm/')}}/images/us_1.png" class="img-responsive">-->--}}
{{--                                            <!--</a>-->--}}
{{--                                            <a href="{{url('crm/user-detail/').'/'.$referalData->id}}">--}}
{{--                                                <img src="{{url('assets-crm/')}}/images/us_2.png" class="img-responsive">--}}
{{--                                            </a>--}}
{{--                                            <a href="JavaScript:vois(0)" class="delete-button" data-deleteuser="{{$referalData->id}}"  data-bs-toggle="modal" data-bs-target="#deleteModal" >--}}
{{--                                                <img src="{{url('assets-crm/')}}/images/us_3.png" class="img-responsive">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
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
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this user?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="#" type="button" class="btn btn-danger modal-delete">Delete User</a>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->



@include('crm.layouts.footer')

