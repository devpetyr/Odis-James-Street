@include('crm-client.layouts.header')
<div class="main_table">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="main_tabs ">
                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                            Mentorship Files
                        </button>
                    </li>
                </ul>
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
                            @foreach($membership->membership->getmembershipfiles as $key=> $value)
                                <tr>
                                    <td>
                                        <h2>{{$key+1}}</h2>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" target="_blank" style="width: 150px" href="{{asset('uploads/membership-filestorage/'.$value->file)}}">
                                            @if(pathinfo($value->file, PATHINFO_EXTENSION) === 'docx')
                                                <i class="far fa-file-word"></i> Download
                                            @elseif(pathinfo($value->file, PATHINFO_EXTENSION) === 'pdf')
                                                <i class="far fa-file-pdf"></i> Download
                                            @elseif(pathinfo($value->file, PATHINFO_EXTENSION) === 'csv' OR pathinfo($value->file, PATHINFO_EXTENSION) === 'xls')
                                                <i class="far fa-file-excel"></i> Download
                                            @else
                                                <i class="far fa-file-exclamation"></i> Download
                                            @endif
                                        </a>
                                    </td>
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
@include('crm-client.layouts.footer')
