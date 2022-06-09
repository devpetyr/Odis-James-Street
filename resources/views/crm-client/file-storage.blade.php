@include('crm-client.layouts.header')
<div class="main_table">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="main_tabs ">
                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                            File Storage
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <div class="card">
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center" id="al">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                                <p>{{Session::get('success')}}</p>
                            </div>
                        @endif
                        <form id="booking-time" action="{{route('crm_client_upload_file')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div  id="time-div">
                                <div class="row">
                                    <div class="col-md-12">
                                        <labe>Select File</labe>
                                        <input class="form-control" id="dt-in" type="file" name="file" required>
                                    </div>
                                </div>
                                <div class="row form-group col-sm-4 pt-4">
                                    <button class="btn btn-primary" type="submit" id="check-btn">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="table-responsive ">
                        <table class="table table-bordered row-border" id="myTable" width="100%" >
                            <thead>
                            <tr>
                                <th>S.no</th>
                                <th>File</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($filestorage as $key => $value)
                                <tr>
                                    <td>
                                        <h2>{{$key+1}}</h2>
                                    </td>
                                    <td><a class="btn btn-primary" target="_blank" style="width: 150px" href="{{asset('uploads/filestorage/'.$value->file)}}">Open File</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
</div>
</section>
<!-- END Main Dashboard Section -->
</main>
@include('crm-client.layouts.footer')
