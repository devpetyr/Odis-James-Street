@include('admin.layouts.header')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Edit Mentorship</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                @if(Session::has('success'))
                    <div class="alert alert-success" id="success-alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                <form action="{{route('add_edit_membership_page',$MembershipModel->id)}}" method="POST">@csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Title <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="title" value="{{$MembershipModel->title}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Subheading</label>
                                <input class="form-control" type="text" name="sub_heading" value="{{$MembershipModel->sub_heading}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label >Sub-Title</label>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="sub_title" value="{{$MembershipModel->sub_title}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label >Price</label>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input class="form-control" type="number" name="price" value="{{$MembershipModel->price}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea rows="4" cols="5" class="form-control summernote" placeholder="Enter your message here" name="description">{{$MembershipModel->description}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="display-block">Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="doctor_active" value="1" {{ $MembershipModel->status === 1 ? 'checked' : ''}}>
                            <label class="form-check-label" for="doctor_active">
                                Active
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="doctor_inactive" value="0" {{ $MembershipModel->status === 0 ? 'checked' : ''}}>
                            <label class="form-check-label" for="doctor_inactive">
                                Inactive
                            </label>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn" type="submit">Update Mentorship</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('admin.layouts.footer')
