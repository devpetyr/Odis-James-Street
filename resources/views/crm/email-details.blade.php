@include('crm.layouts.header')
@if (Session::has('sent'))
    <div class="alert alert-success text-center" id="al">
        <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
        <p>{{ Session::get('sent') }}</p>
    </div>
@endif
<div class="main_table">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="main_tabs ">
                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" >Emails</button>
                    </li>

                </ul>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class=" newest">
                <ul class="list-inline pull-right">
                    <li><a href="#"  class="btn btn_yellow b" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-envelope"> </i> New Email </a></li>
                </ul>
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
                                <th>Date</th>
                                <th>Name</th>
                                <th>Subject</th>
{{--                                <th>Details</th>--}}
                            </tr>
                            </thead>
                            <tbody>
{{--                            /* add history of emails here*/--}}
                            @foreach($email_details as $key => $email)
                                <tr>
                                    <td>
                                        <h2>{{$key+1}}</h2>
                                    </td>
                                    <td>{{$email->created_at->toDateString()}}</td>
                                    <td>{{$email->name}}</td>
                                    <td>{{$email->subject}}</td>
{{--                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Details</a></td>--}}
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="row">-->
    <!--    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">-->
    <!--        <div class="pageint">-->
    <!--            <nav aria-label="Page navigation example pull-right">-->
    <!--                <ul class="pagination">-->
    <!--                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>-->
    <!--                    <li class="page-item"><a class="page-link" href="#">1</a></li>-->
    <!--                    <li class="page-item"><a class="page-link" href="#">2</a></li>-->
    <!--                    <li class="page-item"><a class="page-link" href="#">3</a></li>-->
    <!--                    <li class="page-item"><a class="page-link" href="#">Next</a></li>-->
    <!--                </ul>-->
    <!--            </nav>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
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
                <h5 class="modal-title" id="exampleModalLabel">New Email</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="{{route('crm_email_send')}}" method="POST">@csrf
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Send To</label>
                        <input type="email" class="form-control" name="send_to" placeholder="customer@mail.com" required>
                        <label for="exampleInputEmail1">Template</label>
                        <select class="form-control" name="email_template" required>
                            <option selected disabled hidden >Please Select Template</option>
                            @foreach($email_details as $emails)
                                <option value="{{$emails->id}}">{{$emails->name}}</option>
                            @endforeach
                        </select>
                        <div style="text-align: center; padding-top: 30px;" >
                        <button type="button" class="btn btn_yellow" data-bs-dismiss="modal">Close</button>
                        <button type="Submit" class="btn btn_yellow">Send Mail</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('crm.layouts.footer')
