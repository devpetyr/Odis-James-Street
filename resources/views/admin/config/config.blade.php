@include('admin.layouts.header')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Update Config</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                @if(Session::has('success'))
                    <div class="alert alert-success" id="success-alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                <form action="{{route('config_data_page')}}" method="POST" enctype="multipart/form-data">@csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Email <span class="text-danger"></span></label>
                                <input class="form-control" type="text" name="email" required value="{{$config->email}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone <span class="text-danger"></span></label>
                                <input class="form-control" type="text" name="phone" value="{{$config->phone}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Currency</label>
                                <input class="form-control" type="text" name="currency" value="{{$config->currency}}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Address <span class="text-danger"></span></label>
                                <input class="form-control" type="text" name="address" value="{{$config->address}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Facebook <span class="text-danger"></span></label>
                                <input class="form-control" type="text" name="fb_link" value="{{$config->fb_link}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Twitter</label>
                                <input class="form-control" type="text" name="twitter_link" value="{{$config->twitter_link}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Instagram <span class="text-danger"></span></label>
                                <input class="form-control" type="text" name="insta_link" value="{{$config->insta_link}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>LinkedIn</label>
                                <input class="form-control" type="text" name="linkedin_link" value="{{$config->linkedin_link}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Consultantcy Price</label>
                                <input class="form-control" type="text" name="mins_price" value="{{$config->mins_price}}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Copyright</label>
                                <input class="form-control" type="text" name="copyright" value="{{$config->copyright}}">
                            </div>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn"  type="submit">Update Config</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('admin.layouts.footer')
