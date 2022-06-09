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
            <form>
                <div class="row">
              <div class="form-group col-sm-6">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" value="{{$users->username}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
              </div>
              <div class="form-group col-sm-6">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" value="{{$users->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
              </div>
              <div class="form-group col-sm-6">
                <label for="exampleInputPassword1">Package</label>
                <input type="text" value="{{$users->order->membership->title ?? '' }}" class="form-control" id="exampleInputPassword1" readonly>
              </div>
              <div class="form-group col-sm-6">
                <label for="exampleInputPassword1">Note</label>
                <input type="text" value="{{$users->notes->msg ?? '' }}" class="form-control" id="exampleInputPassword1" readonly>
              </div>
              <div class="form-group col-sm-6">
                <label for="exampleInputPassword1">Referals</label>
                <ul>
                    @foreach($usersSelectedRef as $datalist)
                        @foreach($datalist->ref as $data)
                        <li>{{$data->user_reffered->username}}</li>
                        @endforeach
                    @endforeach
                </ul>
              </div>
              
              </div>
              <button type="button" class="btn btn-primary" id="btnAdd" OnClick="ExtendedData('ref','btnAdd');">Add New Referal</button>
            </form>
            
            <div class="row" style="padding-top:25px;"  >
                <form action="{{route('crm_add_referal')}}" method="POST" id="ref"   style="display:none;">@csrf
                <input type="hidden" value="{{$users->id}}" name="user_id">
                <div class="form-group">
                <label for="exampleFormControlSelect1">Select Referal</label>
                <select class="form-control" id="exampleFormControlSelect1" name="refferedby">
                  @foreach($usersForReferals as $userData)
                  <option value="{{$userData->id}}">{{$userData->username}}</option>
                  @endforeach
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Add Referal</button>
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
