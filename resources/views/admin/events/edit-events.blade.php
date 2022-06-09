@include('admin.layouts.header')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Edit Events</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                @if(Session::has('Added'))
                    <div class="alert alert-success" id="success-alert">
                        {{Session::get('Added')}}
                    </div>
                @endif
                    @if(Session::has('Updated'))
                        <div class="alert alert-success" id="success-alert">
                            {{Session::get('Updated')}}
                        </div>
                    @endif
                <form action="{{route('add_edit_events_page',$event->id)}}" method="POST" enctype="multipart/form-data">@csrf
                    <div class="form-group">
                        <label>Event Name</label>
                        <input class="form-control" type="text" name="name" value="{{$event->name}}">
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Event Date</label>
                            <input class="form-control" type="date" name="date" value="{{$event->event_date}}">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Event Time</label>
                            <input class="form-control" type="time" name="time" value="{{$event->event_time}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Event Longitude, Latitude</label>
                        <input class="form-control" type="text" name="longitude_latitude" value="{{$event->longitude_latitude}}">
                    </div>
                    <div class="form-group">
                        <label>Event Ticket Price</label>
                        <input class="form-control" type="text" name="price" required value="{{$event->price}}">
                    </div>
                    <div class="form-group">
                        <label>Event Address</label>
                        <input class="form-control" type="text" name="address" required value="{{$event->address}}">
                    </div>
                    <div class="form-group">
                        <label>Event Images</label>
                        <div>
                            <input class="form-control" type="file" name="image" onchange="loadFile($(this))" >
                            <small class="form-text text-muted">Max. file size: 50 MB. Allowed images: jpg, gif, png.</small>
                            <img class="img-fluid" alt="" id="output" width="250px" src="{{url('uploads/events/').'/'.$event->image}}">
                        </div>

                    </div>
                    <div class="form-group">
                        <label>Event Description</label>
                        <textarea rows="4" cols="5" class="form-control summernote" placeholder="Enter your message here" name="description">{!! $event->description !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="display-block">Event Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="blog_active" value="1" {{ $event->status === 1 ? 'checked' : ''}}>
                            <label class="form-check-label" for="blog_active">
                                Active
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="blog_inactive" value="0" {{ $event->status === 0 ? 'checked' : ''}}>
                            <label class="form-check-label" for="blog_inactive">
                                Inactive
                            </label>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn" type="submit">Update Events</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('admin.layouts.footer')
