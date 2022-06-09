@include('admin.layouts.header')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add Success Stories</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                @if(Session::has('success'))
                    <div class="alert alert-success" id="success-alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                <form action="{{route('add_edit_testimonials_page')}}" method="POST" enctype="multipart/form-data">@csrf
                    <div class="form-group">
                        <label>Testimonials Description</label>
                        <textarea rows="4" cols="5" class="form-control summernote" placeholder="Enter your message here" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Testimonials Images</label>
                        <div>
                            <input class="form-control" type="file" name="images" onchange="loadFile($(this))" required>
                            <small class="form-text text-muted">Max. file size: 50 MB. Allowed images: jpg, gif, png.</small>
                            <img class="img-fluid" alt="" id="output" width="250px">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Testimonials Name</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Testimonials Designation</label>
                                <input class="form-control" type="text" name="designation">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="display-block">Testimonials Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="blog_active" value="1" checked>
                            <label class="form-check-label" for="blog_active">
                                Active
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="blog_inactive" value="0">
                            <label class="form-check-label" for="blog_inactive">
                                Inactive
                            </label>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn" type="Submit">Publish Testimonials</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('admin.layouts.footer')
