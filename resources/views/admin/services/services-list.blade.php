@include('admin.layouts.header')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-8 col-4">
                <h4 class="page-title">Expertise</h4>

            </div>

            <div class="col-sm-4 col-8 text-right m-b-30">
                <a class="btn btn-primary btn-rounded float-right" href="{{url('/admin/add-expertise')}}"><i class="fa fa-plus"></i> Add Service</a>
            </div>
        </div>
        @if(Session::has('deleted'))
            <div class="alert alert-danger" id="success-alert">
                {{Session::get('deleted')}}
            </div>
        @endif
        <div class="row">

            @foreach($services as $value)
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="blog grid-blog">
                    <div class="text-left">

                        <button type="button" class="btn btn-{{$value->status === 1 ? 'success' : 'danger' }}">{{$value->status === 1 ? 'Active' : 'InActive' }}</button>
                    </div>
                    <br>
                    <div class="blog-image" style="height: 350px !important; width:100%; ">
                            <a href="#"><img class="img-fluid" src="{{url('uploads/services/').'/'.$value->image}}" alt="" height="100%" width="100%"></a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="#">{{$value->name}}</a></h3>
{{--                        <p>{!! $value->description !!}</p>--}}
                        <div class="blog-info clearfix">
                            <div class="post-left">
                                <ul>
                                    <li><a href="#."><i class="fa fa-calendar"></i> <span>{{$value->created_at}}</span></a></li>
                                </ul>
                            </div>

                            <div class="post-right">
                                <a href="{{url('/admin/edit-expertise').'/'.$value->id}}"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                <a href="{{url('/admin/delete-expertise').'/'.$value->id}}"><i class="fa fa-trash-o"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@include('admin.layouts.footer')
