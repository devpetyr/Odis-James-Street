@include('admin.layouts.header')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Update Email-Template</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                @if(Session::has('Updated'))
                    <div class="alert alert-success" id="success-alert">
                        {{Session::get('Updated')}}
                    </div>
                @endif
                @if(Session::has('Added'))
                    <div class="alert alert-success" id="success-alert">
                        {{Session::get('Added')}}
                    </div>
                @endif
                <form action="{{route('email_addedit').'/'.$email_template->id}}" method="POST" enctype="multipart/form-data">@csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="name" required value="{{$email_template->name}}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Subject <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="subject" required value="{{$email_template->subject}}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea rows="4" cols="5" class="form-control summernote" placeholder="Enter your message here" name="description">{{$email_template->description}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn" type="submit">Update Email Template</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('admin.layouts.footer')
