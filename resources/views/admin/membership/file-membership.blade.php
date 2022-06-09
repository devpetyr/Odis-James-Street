@include('admin.layouts.header')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Membership Files</h4>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="card-block">
                        <h6 class="card-title text-bold">File-List</h6>
                        @if(Session::has('deleted'))
                            <div class="alert alert-danger" id="success-alert">
                                {{Session::get('deleted')}}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="datatable table customtable">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Mentorship</th>
                                    <th>FileName</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($membership_file_storage as $key=> $value)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$value->getMentorship->title}}</td>
                                        <td>
                                            <a href="{{asset('/uploads/membership-filestorage/'.$value->file)}}">
                                                 @if(pathinfo($value->file, PATHINFO_EXTENSION) === 'docx')
                                                    <i class="fa fa-file-word-o"></i> Download
                                                 @elseif(pathinfo($value->file, PATHINFO_EXTENSION) === 'pdf')
                                                    <i class="fa fa-file-pdf-o"></i> Download
                                                 @elseif(pathinfo($value->file, PATHINFO_EXTENSION) === 'csv' OR pathinfo($value->file, PATHINFO_EXTENSION) === 'xls')
                                                    <i class="fa fa-file-excel-o"></i> Download
                                                 @else
                                                    <i class="fa fa-file-o"></i> Download
                                                 @endif
                                            </a>
                                        </td>
                                        <td>
                                            <a class="text-right" href="{{route('deleteFile',[$value->id])}}"><i class="fa fa-trash-o"></i> Delete</a>
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
</div>

@include('admin.layouts.footer')
