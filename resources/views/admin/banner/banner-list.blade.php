@include('admin.layouts.header')
<div class="page-wrapper" style="min-height: 757px;">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Content Mangement System</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="{{url('/admin/add-banner')}}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add New Banner</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="card-block">
                        <h6 class="card-title text-bold">Banner-List</h6>
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
                                    <th>Heading</th>
                                    <th>Images</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count = 1; ?>
                                @foreach($bannerModel as $value)
                                <tr>
                                    <td>{{$count}}</td>
                                    <td>{{$value->heading}}</td>
                                    <td>
                                        <img width="28" height="28" src="{{url('uploads/banners/').'/'.$value->images}}" class="rounded-circle m-r-5" alt="">
                                    </td>
                                    <td>
                                        <a class="custom-badge {{ $value->status === 1 ? 'status-green' : 'status-red' }}" aria-expanded="false">
                                            {{ $value->status === 1 ? 'Active' : 'Deactive' }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{url('/admin/edit-banner').'/'.$value->id}}"><i class="fa fa-pencil-square-o"></i> Edit</a> |
                                        <a class="text-right" href="{{url('/admin/delete').'/'.$value->id}}"><i class="fa fa-trash-o"></i> Delete</a>
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
