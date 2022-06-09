@include('admin.layouts.header')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add Expertise</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                @if(Session::has('success'))
                    <div class="alert alert-success" id="success-alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                <form action="{{route('add_edit_service_page')}}" method="POST" enctype="multipart/form-data">@csrf
                    <div class="form-group">
                        <label>Service Name</label>
                        <input class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label>Service Images</label>
                        <div>
                            <input class="form-control" type="file" name="image" onchange="loadFile($(this))" required>
                            <small class="form-text text-muted">Max. file size: 50 MB. Allowed images: jpg, gif, png.</small>
                            <img class="img-fluid" alt="" id="output" width="250px">
                        </div>

                    </div>
                    <div class="form-group">
                        <label>Service Description</label>
                        <textarea rows="4" cols="5" class="form-control summernote" placeholder="Enter your message here" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="display-block">Service Status</label>
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
                        <button class="btn btn-primary submit-btn" type="submit">Publish Expertise</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('admin.layouts.footer')
