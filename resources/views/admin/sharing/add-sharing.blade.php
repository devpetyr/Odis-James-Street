@include('admin.layouts.header')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add New Sharing</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                @if(Session::has('success'))
                    <div class="alert alert-success" id="success-alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                <form action="{{route('add_edit_sharing_page')}}" method="POST" enctype="multipart/form-data">@csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Category <span class="text-danger">*</span></label>
                                <select name="category" class="form-control" required>
                                    <option hidden selected disabled>Select Category</option>
                                    <option value="Mentorship Lessons">Mentorship Lessons</option>
                                    <option value="Zoom Recordings">Zoom Recordings</option>
                                    <option value="Instructional Videos">Instructional Videos</option>
                                    <option value="Investor Tools">Investor Tools</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Title<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="title" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Image/Document Link (optional)</label>
                                <input class="form-control" type="text" name="doc_link" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Video-Link (optional)</label>
                                <input class="form-control" type="text" name="video_link" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Attachment (optional)</label>
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
                        <button class="btn btn-primary submit-btn" type="submit">Add Sharing</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('admin.layouts.footer')
