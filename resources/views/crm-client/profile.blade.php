@include('crm-client.layouts.header')
<div class="main_tabs ">
    <ul class="nav nav-tabs " id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Profile / Reset Password</button>
        </li>
    </ul>
</div>
<div class="row" id="myapp">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
        <br>
        <div class="container">
            <div id="profile-tab">
            <form action="{{route('crm_client_profile_update').'/'.$users->id}}" method="POST">@csrf
            @if (Session::has('update'))
                <div class="alert alert-success text-center" id="al">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                    <p>{{ Session::get('update') }}</p>
                </div>
            @endif
            @if (Session::has('reset'))
                <div class="alert alert-success text-center" id="al">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                    <p>{{ Session::get('reset') }}</p>
                </div>
            @endif
            @if (Session::has('oldpass'))
                <div class="alert alert-danger text-center" id="al">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                    <p>{{ Session::get('oldpass') }}</p>
                </div>
            @endif
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" required value="{{$users->username}}" {{$users->provider_id !=null ? 'readonly' : ''}}  class="form-control" name="username">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" required value="{{$users->email}}" {{$users->provider_id !=null ? 'readonly' : ''}} class="form-control" name="email">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" required value="{{$users->phone}}" class="form-control" name="phone">
                    </div>
                </div>
                <div class="row form-group col-sm-12 ">
                    <div class="form-group col-sm-6  text-left">
                        <button type="submit" required class="btn btn_yellow" {{$users->provider_id !=null ? 'hidden' : ''}}>Update Profile</button>
                    </div>
                    <div class="form-group col-sm-6 text-right">
                        <button type="button" class="btn btn_yellow" id="btnAdd" OnClick="ExtendedData('ref','profile-tab');" {{$users->provider_id !=null ? 'hidden' : ''}}>Reset Password</button>
                    </div>
                </div>
            </form>
            </div>
            <div class="form-group col-sm-6">
            
            </div>
            <div class="row" style="padding-top:25px;">
                <form action="{{route('crm_client_pass_reset').'/'.$users->id}}" method="POST" id="ref"style="display:none;">@csrf
                <div class="form-group">
                <label for="exampleFormControlSelect1">Enter Old Password</label>
                <input type="password" required value="" class="form-control" name="old_password" {{$users->provider_id !=null ? 'disabled' : ''}}>
                </div>
                <div class="form-group">
                <label for="exampleFormControlSelect1">Enter New Password</label>
                <input type="password" required value="" class="form-control" name="new_password" {{$users->provider_id !=null ? 'disabled' : ''}}>
                </div>
              <button type="submit" class="btn btn_yellow" {{$users->provider_id !=null ? 'disabled' : ''}}>Update Password</button>
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
    //for alert hide
    setTimeout(function() {
        $('#al').fadeOut('slow');
    }, 3000);
</script>
@include('crm-client.layouts.footer')
