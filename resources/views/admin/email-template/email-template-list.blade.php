@include('admin.layouts.header')
<div class="page-wrapper" style="min-height: 757px;">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Email-Template</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="{{route('add_email')}}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add New Email Template</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="card-block">
                        <h6 class="card-title text-bold">Email-Template</h6>
                        @if(Session::has('Deleted'))
                            <div class="alert alert-danger" id="success-alert">
                                {{Session::get('Deleted')}}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="datatable table">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Subject</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count = 1; ?>
                                @foreach($email_template as $value)
                                    <tr>
                                        <td>{{$count}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->subject}}</td>
                                        <td>
                                            <a href="{{url('/admin/edit-email-template').'/'.$value->id}}"><i class="fa fa-pencil-square-o"></i> Edit</a> |
                                            <a class="text-right" href="{{url('/admin/delete-email-template').'/'.$value->id}}"><i class="fa fa-trash-o"></i> Delete</a>
                                        </td>
                                    </tr>
                                    <?php $count++; ?>
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
