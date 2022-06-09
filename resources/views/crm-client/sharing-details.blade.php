@include('crm-client.layouts.header')
<div class="main_table">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="main_tabs ">
                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                            @if(isset($sharing))
                                Sharing Details
                            @else
                                {{$sharing[0]->category }}
                            @endif
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
                                <th>Title</th>
                                <th>Category</th>
                                <th>Document</th>
                                <th>Video</th>
                                <th>Attachment</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sharing as $key => $value)
                                <tr>
                                    <td>
                                        <h2>{{$key+1}}</h2>
                                    </td>
                                    <td>{{$value->title}}</td>
                                    <td>{{$value->category}}</td>
                                    <td>@if($value->image_doc !== null)<a href="{{$value->image_doc}}" class="btn-open" target="_blank"> Open</a>@else <p>-</p> @endif</td>
                                    <td>@if($value->video_link !== null)<a href="{{$value->video_link}}" class="btn-open" target="_blank"> Open</a>@else <p>-</p> @endif</td>
                                    <td>@if($value->attachments !== null)<a href="{{asset('uploads/sharing/'.$value->attachments)}}" class="btn-open" target="_blank"> Open</a>@else <p>-</p> @endif</td>
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
