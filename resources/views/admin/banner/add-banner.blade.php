@include('admin.layouts.header')

<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add Banner</h4>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-8 offset-lg-2">
                @if(Session::has('success'))
                    <div class="alert alert-success" id="success-alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                    <script>

                    </script>
                <form action="{{route('add_edit_banner_page')}}" method="post" enctype="multipart/form-data">@csrf
                    <div class="form-group">
                        <label>Banner Heading</label>
                        <input class="form-control" type="text" name="heading" required>
                    </div>
                    <div class="form-group">
                        <label>Banner Description</label>
                        <textarea rows="4" cols="5" name="description" class="form-control summernote" placeholder="Enter your message here"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Banner Images</label>
                        <div>
                            <input class="form-control" type="file" name="images" onchange="loadFile($(this))" required>
                            <small class="form-text text-muted">Max. file size: 50 MB. Allowed images: jpg, gif, png.</small>
                            <img class="img-fluid" alt="" id="output" width="250px">
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="display-block">Banner Status</label>
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
                        <button class="btn btn-primary submit-btn" type="submit">Publish Banner</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('admin.layouts.footer')
