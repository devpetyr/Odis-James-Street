@include('crm.layouts.header')
<div class="main_tabs ">
    <ul class="nav nav-tabs " id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">User</button>
        </li>
    </ul>
</div>
<div class="row" id="myapp">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
        <br>
        <div class="container">
            @if (Session::has('ref_success'))
                <div class="alert alert-success text-center" id="al">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                    <p>{{ Session::get('ref_success') }}</p>
                </div>
            @endif
            @if (Session::has('ref_failed'))
                <div class="alert alert-danger text-center" id="al">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                    <p>{{ Session::get('ref_failed') }}</p>
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert alert-success text-center" id="al">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif
             @if (Session::has('failed'))
                <div class="alert alert-danger text-center" id="al">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                    <p>{{ Session::get('failed') }}</p>
                </div>
            @endif
            <form method="POST" action="{{route('crm_update_user',[$users->id])}}">@csrf
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label for="exampleInputEmail1">Name</label>
                    <!--<input type="hidden" value="{{$users->id}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="user">-->
                    <input type="text" value="{{$users->username}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="username">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" value="{{$users->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="text" value="{{$users->phone}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone" />
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="exampleInputPassword1">Package</label>
                    <input type="text" value="{{$users->order->membership->sub_title ?? '' }}" class="form-control" id="exampleInputPassword1" readonly />
                  </div>
                  <div class="form-group col-sm-12">
                    <label for="exampleInputPassword1">Note</label>
                    <input type="text" value="{{$users->notes->msg ?? '' }}" class="form-control" id="exampleInputPassword1" readonly />
                  </div>
                  <div class="form-group col-sm-12 ">
                    <button type="submit" class="btn btn_yellow float-right">Update User</button>
                  </div>
                  <br>
                 </div>
              </form>
              <hr>
              <form>
              <div class="form-group col-sm-6">
                <label for="exampleInputPassword1">Referals</label>
                <ol start="1">
                    @foreach($usersSelectedRef as $datalist)
                        @foreach($datalist->ref as $data)
                        <li>- {{$data->user_reffered->email}}</li>
                        @endforeach
                    @endforeach
                </ol>
              </div>
              
              
              <button type="button" class="btn btn_yellow" id="btnAdd" OnClick="ExtendedData('ref','btnAdd');">Add New Referal</button>
            </form>
            
            <div class="row" style="padding-top:25px;">
                <form action="{{route('crm_add_referal')}}" method="POST" id="ref" style="display:none;">@csrf
                    
                    <div class="main_tabs ">
                        <ul class="nav nav-tabs " id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Add Referal</button>
                            </li>
                        </ul>
                    </div>
                    <input type="hidden" class="form-control" name="ref_id" value="{{$users->id}}">
                    <div class="form-group col-sm-6"> 
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" name="email" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                  <button type="submit" class="btn btn_yellow">Register Referal</button>
              </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
<!-- END Main Dashboard Section -->
</main>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script>
    function ExtendedData(divId,btnId) {
        var extended = document.getElementById(divId);
        var button = document.getElementById(btnId);
            extended.style.display = "block";
            button.style.display = "none";
    }
    
</script>
@include('crm.layouts.footer')
