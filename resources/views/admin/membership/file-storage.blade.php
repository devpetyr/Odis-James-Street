@include('admin.layouts.header')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Membership File Storage</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                @if(Session::has('success'))
                    <div class="alert alert-success" id="success-alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                <form action="{{route('file_storage_post')}}" method="POST" enctype="multipart/form-data">@csrf
                    <div class="row ">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label >Select Membership<span class="text-danger">*</span></label>
                                @error('membership')
                                <p class="text-danger" id="al">{{$message}}</p>
                                @enderror
                                @foreach($membership as $key=> $val)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{$val->id}}" name="membership[]" id="{{$key}}">
                                        <label class="form-check-label" for="{{$key}}">
                                            {{$val->title}}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label >File <span class="text-danger">*</span></label>
                                <div class="form-file mb-4">
                                    @error('File')
                                    <p class="text-danger" id="al">{{$message}}</p>
                                    @enderror
                                    <input type="file" class="form-file-input " id="customFile" name="File" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-10 text-center pb-4">
                        <button class="btn btn-primary submit-btn" type="submit">Upload</button>
                    </div>
                </form>
            </div>
        </div>
        <br>


    </div>
</div>

@include('admin.layouts.footer')
