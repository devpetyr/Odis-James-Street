@include('crm.layouts.header')
<div class="main_table">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="main_tabs ">
                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Order Reports</button>
                    </li>

                </ul>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class=" newest">
                <ul class="list-inline pull-right">
                    <li><a  class="btn btn_yellow b" data-bs-toggle="collapse" href="#collapseExample"  aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-filter"></i> Filter </a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="collapes_div collapse" id="collapseExample">
        <form action="{{route('crm_reports_data_page')}}" method="post">@csrf
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="date_div">
                            <label>Report Form <input type="date" name="date_from"></label>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="date_div sec">
                            <label>To <input type="date" name="date_to"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <!--<div class="date_div sec">-->
                        <!--    <label>Packages <input class="packages-date" type="date"></label>-->
                        <!--</div>-->
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12 pdo">
                        <div class="custom_check">
                            <ul>
                                <li>
                                    <label class="containerd"> Daily
                                        <input type="checkbox" name="daily" value="{{date('Y-m-d')}}">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="containerd"> Monthly
                                        <input type="checkbox" name="monthly" value="{{date('Y-m-d')}}">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="containerd">Yearly
                                        <input type="checkbox" name ="yearly" value="{{date('Y-m-d')}}">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <button class="nav-link active" type="submit">Filter</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
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
                                <th>Customer</th>
                                <th>Amount</th>
                                <th>Status</th>
                                
                                
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($orders as $key => $orderdata)
                                <tr>
                                    <td>
                                        <h2>{{$key+1}}</h2>
                                    </td>
                                    <td>{{$orderdata->created_at->toDateString()}}</td>
                                    <td>{{$orderdata->user->username}}</td>
                                    <td>${{$orderdata->order_price}}</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">{{$orderdata->status === 0 ? 'Received' : 'Cancelled'}}</a></td>
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
@include('crm.layouts.footer')
