@include('admin.layouts.header')
<div class="page-wrapper" style="min-height: 757px;">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Sharing</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="{{url('/admin/add-sharing')}}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add New Sharing</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="card-block">
                        <h6 class="card-title text-bold">Sharing-List</h6>
                        @if(Session::has('deleted'))
                            <div class="alert alert-danger" id="success-alert">
                                {{Session::get('deleted')}}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="datatable table">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count = 1; ?>
                                @foreach($sharing as $key=> $value)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$value->category}}</td>
                                        <td>{{$value->title}}</td>
                                        <td>
                                            <a class="custom-badge {{ $value->status === 1 ? 'status-green' : 'status-red' }}" aria-expanded="false">
                                                {{ $value->status === 1 ? 'Active' : 'Deactive' }}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{url('/admin/edit-sharing').'/'.$value->id}}"><i class="fa fa-pencil-square-o"></i> Edit</a> |
                                            <a class="text-right" href="{{url('/admin/delete-sharing/').'/'.$value->id}}"><i class="fa fa-trash-o"></i> Delete</a>
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
