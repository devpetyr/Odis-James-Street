@include('admin.layouts.header')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add CMS</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                @if(Session::has('success'))
                    <div class="alert alert-success" id="success-alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                <form action="{{route('add_edit_cms_page',$CMSModel->id)}}" method="POST" enctype="multipart/form-data">@csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Page <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="page" required value="{{$CMSModel->page}}" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Title <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="title" value="{{$CMSModel->title}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Sub-Heading</label>
                                <input class="form-control" type="text" name="sub_heading" value="{{$CMSModel->sub_heading}}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Description 1</label>
                                <textarea rows="4" cols="5" class="form-control summernote" placeholder="Enter your message here" name="description_1">{{$CMSModel->description_1}}</textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Description 2</label>
                                <textarea rows="4" cols="5" class="form-control summernote" placeholder="Enter your message here" name="description_2">{{$CMSModel->description_2}}</textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Image 1</label>
                                    <div>
                                        <input class="form-control" type="file" name="image_1" onchange="loadFile($(this))" >
                                        <small class="form-text text-muted">Max. file size: 50 MB. Allowed images: jpg, gif, png.</small>
                                        <img class="img-fluid" alt="" id="output" width="250px" src="{{url('uploads/cms/').'/'.$CMSModel->image_1 }}">
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Image 2</label>
                                <div>
                                    <input class="form-control" type="file" name="image_2" onchange="loadFile($(this))" >
                                    <small class="form-text text-muted">Max. file size: 50 MB. Allowed images: jpg, gif, png.</small>
                                    <img class="img-fluid" alt="" id="output" width="250px" src="{{url('uploads/cms/').'/'.$CMSModel->image_2 }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Video 1</label>
                                <div class="profile-upload">
                                    <div class="upload-img">
                                        <img alt="" src="{{url('assets/img/video.png')}}">
                                    </div>
                                    <div class="upload-input">
                                        <input type="file" class="form-control" name="video_1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Video 2</label>
                                <div class="profile-upload">
                                    <div class="upload-img">
                                        <img alt="" src="{{url('assets/img/video.png')}}">
                                    </div>
                                    <div class="upload-input">
                                        <input type="file" class="form-control"name="video_2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="display-block">Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="doctor_active" value="1" {{ $CMSModel->status === 1 ? 'checked' : ''}}>
                            <label class="form-check-label" for="doctor_active">
                                Active
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="doctor_inactive" value="0" {{ $CMSModel->status === 0 ? 'checked' : ''}}>
                            <label class="form-check-label" for="doctor_inactive">
                                Inactive
                            </label>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn" type="submit">Update CMS</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('admin.layouts.footer')
