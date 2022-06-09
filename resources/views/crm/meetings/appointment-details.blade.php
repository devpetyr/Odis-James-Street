@include('crm.layouts.header')
<div class="main_table forheading">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="main_tabs ">
                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Appointment Detail</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="container">
        <div id="profile-tab">
            <form action="" method="POST">@csrf
                <div class="row">
                    <div class="form-group col-sm-4">
                        <label for="exampleInputEmail1">Date *</label>
                        <input type="text" required="" class="form-control" name="fullname" value="{{$schedule->date}}" readonly>
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="exampleInputEmail1">Start Time *</label>
                        <input type="text" required="" class="form-control" name="email" value="{{$schedule->start_time}}" readonly>
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="exampleInputEmail1">End Time *</label>
                        <input type="text" required="" class="form-control" name="email" value="{{$schedule->end_time}}" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="exampleInputEmail1">Full Name *</label>
                        <input type="text" required="" class="form-control" name="fullname" value="{{$schedule->fullname}}" readonly>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="exampleInputEmail1">Email *</label>
                        <input type="text" required="" class="form-control" name="email" value="{{$schedule->email}}" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Address *</label>
                        <input type="text" required="" class="form-control" name="address" value="{{$schedule->address}}" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="exampleInputEmail1">Phone No *</label>
                        <input type="text" class="form-control" name="phone_no" value="{{$schedule->phone_no}}" readonly>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="exampleInputEmail1">Country *</label>
                        <input type="text" class="form-control" name="country" value="{{$schedule->country}}" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-4">
                        <label for="exampleInputEmail1">City *</label>
                        <input type="text" required="" value="{{$schedule->city}}" class="form-control" name="city" readonly>
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="exampleInputEmail1">State *</label>
                        <input type="text" required="" value="{{$schedule->state}}" class="form-control" name="state" readonly>
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="exampleInputEmail1">Zip *</label>
                        <input type="text" required="" value="{{$schedule->zip}}" class="form-control" name="zip" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Note</label>
                        <textarea class="form-control" name="note" readonly>{{$schedule->note}}</textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@include('crm.layouts.footer')