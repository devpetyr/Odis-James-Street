@include('crm.layouts.header')
<style>
    #Mycalander .mv-daynames-table {
        table-layout: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background: #ce972f !important;
        color: #222!important;
    }
</style>

<div class="main_table forheading">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="main_tabs ">
                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">All Status</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Meetings Adjustment</button>
{{--                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="true">Meetings</button>--}}
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="container">
                    <!--- Time Setting -->
                    <form id="time-form">
                        @csrf
                        <input type="hidden" name="type" value="3">
                        <div class="row">
                            <h2>
                                <p>Select the start time and end time of your meetings</p>
                            </h2>
                            <div class="col-md-6">
                                <labe>Start Time</labe>
                                <input placeholder="Selected time" type="time" id="input_starttime" value="{{$time->start}}" name="st_time" class="form-control timepicker">
                            </div>
                            <div class="col-md-6">
                                <labe>End Time</labe>
                                <input placeholder="Selected time" type="time" id="input_starttime" value="{{$time->end}}" name="end_time" class="form-control timepicker">
                            </div>
                            <a class="btn btn-primary" id="time-btn" href="javascript:void(0)">Update Time</a>
                            <hr>
                        </div>
                    </form>
                    <!-- Days Setting -->
                    <form id="days-form">
                        @csrf
                        <input type="hidden" name="type" value="1">
                        <div class="row">
                            <h2>
                                <p>Select Days On Which You don't want to schedule any meetings</p>
                            </h2>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" {{(in_array('Mon', $allday, true))?'checked':''}} name="days[]" value="01">
                                    Monday
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" {{(in_array('Tue', $allday, true))?'checked':''}} name="days[]" value="02">
                                    Tuesday
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" {{(in_array('Wed', $allday, true))?'checked':''}} name="days[]" value="03">
                                    Wednesday
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" {{(in_array('Thu', $allday, true))?'checked':''}} name="days[]" value="04">
                                    Thursday
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" {{(in_array('Fri', $allday, true))?'checked':''}} name="days[]" value="05">
                                    Friday
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" {{(in_array('Sat', $allday, true))?'checked':''}} name="days[]" value="06">
                                    Saturday
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label>
                                    <input type="checkbox" {{(in_array('Sun', $allday, true))?'checked':''}} name="days[]" value="07">
                                    Sunday
                                </label>
                            </div>
                            <div class="col-md-12">
                                <a class="btn btn-primary" id="day-btn" href="javascript:void(0)">Update Days</a>
                            </div>
                            <hr>
                        </div>
                    </form>
                    <!-- Date Setting-->
                    <form id="date-form">
                        @csrf
                        <input type="hidden" name="type" value="2">
                        <div class="row">
                            <h2>
                                <p>Add Dates on which you don't want to schedule meetings</p>
                            </h2>
                            <div class="col-md-6">
                                <labe>Select Date</labe>
                                <input placeholder="Selected Date" type="date" name="date" class="form-control datepicker">
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-primary" id="date-btn" href="javascript:void(0)">Add Date</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            </div>
            <hr>
            <div class="container">
{{--                <div id='calendar'></div>--}}
                <div id="Mycalander">
                    <!--<iframe src="https://calendar.google.com/calendar/embed?src=c_djvppvuagpfkc5lrs2io2pdi4k%40group.calendar.google.com&ctz=America%2FLos_Angeles" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>-->
                    <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%23cb972f&ctz=America%2FLos_Angeles&showTitle=0&showNav=1&showDate=0&showPrint=1&showCalendars=0&showTz=0&mode=MONTH&src=c_djvppvuagpfkc5lrs2io2pdi4k%40group.calendar.google.com&ctz=America%2FLos_Angeles" style="border: 0" width="100%" height="800" frameborder="0" scrolling="no"></iframe>
                    <!--<iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%23cb972f&ctz=America%2FLos_Angeles&showTitle=0&showNav=1&showDate=0&showPrint=1&showCalendars=0&showTz=0&mode=MONTH&src=YnJvcGh1bjM0MmtwcDc3cWR1cjhlNXVtdWdAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23E67C73" style="border-width:0" width="100%" height="800" frameborder="0" scrolling="no"></iframe>-->
                </div>
        </div>
    </div>

</div>
</section>
<!-- END Main Dashboard Section -->
</main>
@include('crm.layouts.footer')
<script>
    $(document).ready(function(){
        $('#day-btn').click(function(){
            var edata =  $('#days-form').serialize();
            $.post( '{{route('crm.meeting.adjustment')}}', edata)
                .done(function( data ) {
                    if(data.status==1)
                    {
                        alert(data.msg);
                    }
                });
        })

        $('#time-btn').click(function(){
            var edata =  $('#time-form').serialize();
            $.post( '{{route('crm.meeting.adjustment')}}', edata)
                .done(function( data ) {
                    if(data.status==1)
                    {
                        alert(data.msg);
                    }
                });
        })
        $('#date-btn').click(function(){
            var edata =  $('#date-form').serialize();
            $.post( '{{route('crm.meeting.adjustment')}}', edata)
                .done(function( data ) {
                    if(data.status==1)
                    {
                        alert(data.msg);
                    }
                });
        })





    })
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',

            events:[
                    @foreach($meetings as $met)
                {
                    display:'list-item',
                    editable:false,
                    id:'{{$met->id}}',
                    title:'Meeting with {{$met->fullname}}',
                    start:'{{$met->date.' '.$met->start_time}}',
                    end:'{{$met->date.' '.$met->end_time}}',
                    color:'blue',
                    url:'appointment-detail/{{$met->id}}'

                },
                @endforeach
            ],

        });
        calendar.render();
    });

</script>
