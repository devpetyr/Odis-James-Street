@include('crm-client.layouts.header')
<div class="main_table">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="main_tabs ">
                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Order Reports</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Pending Payments</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Confirm Payments</button>
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
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="date_div">
                            <label>Report Form <input type="date"></label>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="date_div sec">
                            <label>To <input type="date"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="date_div sec">
                            <label>Packages <input type="date"></label>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12 pdo">
                        <div class="custom_check">
                            <ul>
                                <li>
                                    <label class="containerd"> Daily
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="containerd"> Monthly
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="containerd">Yearly
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="table-responsive ">
                        <table class="table table-bordered" id="" width="100%" >
                            <thead>
                            <tr>
                                <th> Order</th>
                                <th>Date</th>
                                <th>Customer</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <label class="containerd">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <h2>123456789</h2>
                                </td>
                                <td>June 17 2021,12:42 AM</td>
                                <td>Lorem Ipsum</td>
                                <td>$1500</td>
                                <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                <td>
                                    <a href="JavaScript:vois(0)" class="d">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </a></td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="containerd">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <h2>123456789</h2>
                                </td>
                                <td>June 17 2021,12:42 AM</td>
                                <td>Lorem Ipsum</td>
                                <td>$1500</td>
                                <td><a href="JavaScript:void(0)" class="btn red btn_yellow">Recived</a></td>
                                <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="containerd">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <h2>123456789</h2>
                                </td>
                                <td>June 17 2021,12:42 AM</td>
                                <td>Lorem Ipsum</td>
                                <td>$1500</td>
                                <td><a href="JavaScript:void(0)" class="btn red btn_yellow">Recived</a></td>
                                <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="containerd">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <h2>123456789</h2>
                                </td>
                                <td>June 17 2021,12:42 AM</td>
                                <td>Lorem Ipsum</td>
                                <td>$1500</td>
                                <td><a href="JavaScript:void(0)" class="btn red btn_yellow">Recived</a></td>
                                <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="containerd">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <h2>123456789</h2>
                                </td>
                                <td>June 17 2021,12:42 AM</td>
                                <td>Lorem Ipsum</td>
                                <td>$1500</td>
                                <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="containerd">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <h2>123456789</h2>
                                </td>
                                <td>June 17 2021,12:42 AM</td>
                                <td>Lorem Ipsum</td>
                                <td>$1500</td>
                                <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="containerd">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <h2>123456789</h2>
                                </td>
                                <td>June 17 2021,12:42 AM</td>
                                <td>Lorem Ipsum</td>
                                <td>$1500</td>
                                <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="containerd">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <h2>123456789</h2>
                                </td>
                                <td>June 17 2021,12:42 AM</td>
                                <td>Lorem Ipsum</td>
                                <td>$1500</td>
                                <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="containerd">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <h2>123456789</h2>
                                </td>
                                <td>June 17 2021,12:42 AM</td>
                                <td>Lorem Ipsum</td>
                                <td>$1500</td>
                                <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="containerd">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <h2>123456789</h2>
                                </td>
                                <td>June 17 2021,12:42 AM</td>
                                <td>Lorem Ipsum</td>
                                <td>$1500</td>
                                <td><a href="JavaScript:void(0)" class="btn red btn_yellow">Recived</a></td>
                                <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="containerd">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <h2>123456789</h2>
                                </td>
                                <td>June 17 2021,12:42 AM</td>
                                <td>Lorem Ipsum</td>
                                <td>$1500</td>
                                <td><a href="JavaScript:void(0)" class="btn red btn_yellow">Recived</a></td>
                                <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="containerd">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <h2>123456789</h2>
                                </td>
                                <td>June 17 2021,12:42 AM</td>
                                <td>Lorem Ipsum</td>
                                <td>$1500</td>
                                <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="containerd">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <h2>123456789</h2>
                                </td>
                                <td>June 17 2021,12:42 AM</td>
                                <td>Lorem Ipsum</td>
                                <td>$1500</td>
                                <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="containerd">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <h2>123456789</h2>
                                </td>
                                <td>June 17 2021,12:42 AM</td>
                                <td>Lorem Ipsum</td>
                                <td>$1500</td>
                                <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="containerd">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <h2>123456789</h2>
                                </td>
                                <td>June 17 2021,12:42 AM</td>
                                <td>Lorem Ipsum</td>
                                <td>$1500</td>
                                <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="containerd">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <h2>123456789</h2>
                                </td>
                                <td>June 17 2021,12:42 AM</td>
                                <td>Lorem Ipsum</td>
                                <td>$1500</td>
                                <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="containerd">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <h2>123456789</h2>
                                </td>
                                <td>June 17 2021,12:42 AM</td>
                                <td>Lorem Ipsum</td>
                                <td>$1500</td>
                                <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="containerd">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <h2>123456789</h2>
                                </td>
                                <td>June 17 2021,12:42 AM</td>
                                <td>Lorem Ipsum</td>
                                <td>$1500</td>
                                <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="containerd">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <h2>123456789</h2>
                                </td>
                                <td>June 17 2021,12:42 AM</td>
                                <td>Lorem Ipsum</td>
                                <td>$1500</td>
                                <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="containerd">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <h2>123456789</h2>
                                </td>
                                <td>June 17 2021,12:42 AM</td>
                                <td>Lorem Ipsum</td>
                                <td>$1500</td>
                                <td><a href="JavaScript:void(0)" class="btn red btn_yellow">Recived</a></td>
                                <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="table-responsive ">
                        <div class="table-responsive ">
                            <table class="table table-bordered" id="" width="100%" >
                                <thead>
                                <tr>
                                    <th> Order</th>
                                    <th>Date</th>
                                    <th>Customer</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td>
                                        <a href="JavaScript:vois(0)" class="d">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn red btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn red btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn red btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn red btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn red btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn red btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="table-responsive ">
                        <div class="table-responsive ">
                            <table class="table table-bordered" id="" width="100%" >
                                <thead>
                                <tr>
                                    <th> Order</th>
                                    <th>Date</th>
                                    <th>Customer</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td>
                                        <a href="JavaScript:vois(0)" class="d">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn red btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn red btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn red btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn red btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn red btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="containerd">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <h2>123456789</h2>
                                    </td>
                                    <td>June 17 2021,12:42 AM</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$1500</td>
                                    <td><a href="JavaScript:void(0)" class="btn red btn_yellow">Recived</a></td>
                                    <td><a href="JavaScript:void(0)" class="v">View Details</a></td>
                                    <td><a href="JavaScript:vois(0)" class="d"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="pageint">
                <nav aria-label="Page navigation example pull-right">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
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
