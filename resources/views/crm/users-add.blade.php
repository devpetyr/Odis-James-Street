@include('crm.layouts.header')
<div class="main_table">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="main_tabs ">
                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">User</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
            @if (Session::has('success_signup'))
                <div class="alert alert-success text-center" id="al">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                    <p>{{ Session::get('success_signup') }}</p>
                </div>
            @endif
            <form method="post" action="{{route('crm_add_user_data')}}">@csrf
                <div class="row">
                    
                  <div class="form-group col-sm-6">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                     @error('username')
                        <p style="color: red" id="al">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                    @error('email')
                        <p style="color: red" id="al">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
                    @error('password')
                        <p style="color: red" id="al">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn_yellow" >Add New User</button>
                  </div>
                </div>
            </form>
    </div>
    
</div>



@include('crm.layouts.footer')
