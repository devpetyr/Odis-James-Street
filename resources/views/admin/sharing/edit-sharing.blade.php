@include('admin.layouts.header')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Edit Sharing</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                @if(Session::has('success'))
                    <div class="alert alert-success" id="success-alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                <form action="{{route('add_edit_sharing_page',['sharing'=>$sharing->id])}}" method="POST" enctype="multipart/form-data">@csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Category <span class="text-danger">*</span></label>
                                <select name="category" class="form-control">
                                    <option hidden selected disabled>Select Category</option>
                                    <option value="Mentorship Lessons"   {{$sharing->category == 'Mentorship Lessons' ? 'selected' : ''}}>Mentorship Lessons</option>
                                    <option value="Zoom Recordings"      {{$sharing->category == 'Zoom Recordings' ? 'selected' : ''}}>Zoom Recordings</option>
                                    <option value="Instructional Videos" {{$sharing->category == 'Instructional Videos' ? 'selected' : ''}}>Instructional Videos</option>
                                    <option value="Investor Tools"       {{$sharing->category == 'Investor Tools' ? 'selected' : ''}}>Investor Tools</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" name="title" value="{{$sharing->title}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Image/Document Link</label>
                                <input class="form-control" type="text" name="doc_link" value="{{$sharing->image_doc}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Video-Link</label>
                                <input class="form-control" type="text" name="video_link" value="{{$sharing->video_link}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Attachment</label>
                                <input class="form-control" type="file" name="attachments">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="display-block">Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="doctor_active" value="1" checked>
                            <label class="form-check-label" for="doctor_active">
                                Active
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="doctor_inactive" value="0">
                            <label class="form-check-label" for="doctor_inactive">
                                Inactive
                            </label>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn" type="submit">Edit Sharing</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('admin.layouts.footer')
