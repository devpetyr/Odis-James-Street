@include('crm-client.layouts.header')
<style>
    .loader {
        color: black;
        font-size: 20px;
        margin: 100px auto;
        width: 1em;
        height: 1em;
        border-radius: 50%;
        position: relative;
        text-indent: -9999em;
        -webkit-animation: load4 1.3s infinite linear;
        animation: load4 1.3s infinite linear;
        -webkit-transform: translateZ(0);
        -ms-transform: translateZ(0);
        transform: translateZ(0);
    }
    .yourstatus {
    border: 1px solid #d5d5d5;
    padding: 25px 5px 0px 15px;
    border-radius: 7px;
    margin: 20px 0px 15px 0px;
}
    @-webkit-keyframes load4 {
        0%,
        100% {
            box-shadow: 0 -3em 0 0.2em, 2em -2em 0 0em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 0;
        }
        12.5% {
            box-shadow: 0 -3em 0 0, 2em -2em 0 0.2em, 3em 0 0 0, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
        }
        25% {
            box-shadow: 0 -3em 0 -0.5em, 2em -2em 0 0, 3em 0 0 0.2em, 2em 2em 0 0, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
        }
        37.5% {
            box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 0, 2em 2em 0 0.2em, 0 3em 0 0em, -2em 2em 0 -1em, -3em 0em 0 -1em, -2em -2em 0 -1em;
        }
        50% {
            box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 0em, 0 3em 0 0.2em, -2em 2em 0 0, -3em 0em 0 -1em, -2em -2em 0 -1em;
        }
        62.5% {
            box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 0, -2em 2em 0 0.2em, -3em 0 0 0, -2em -2em 0 -1em;
        }
        75% {
            box-shadow: 0em -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0.2em, -2em -2em 0 0;
        }
        87.5% {
            box-shadow: 0em -3em 0 0, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0, -2em -2em 0 0.2em;
        }
    }
    @keyframes load4 {
        0%,
        100% {
            box-shadow: 0 -3em 0 0.2em, 2em -2em 0 0em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 0;
        }
        12.5% {
            box-shadow: 0 -3em 0 0, 2em -2em 0 0.2em, 3em 0 0 0, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
        }
        25% {
            box-shadow: 0 -3em 0 -0.5em, 2em -2em 0 0, 3em 0 0 0.2em, 2em 2em 0 0, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
        }
        37.5% {
            box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 0, 2em 2em 0 0.2em, 0 3em 0 0em, -2em 2em 0 -1em, -3em 0em 0 -1em, -2em -2em 0 -1em;
        }
        50% {
            box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 0em, 0 3em 0 0.2em, -2em 2em 0 0, -3em 0em 0 -1em, -2em -2em 0 -1em;
        }
        62.5% {
            box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 0, -2em 2em 0 0.2em, -3em 0 0 0, -2em -2em 0 -1em;
        }
        75% {
            box-shadow: 0em -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0.2em, -2em -2em 0 0;
        }
        87.5% {
            box-shadow: 0em -3em 0 0, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0, -2em -2em 0 0.2em;
        }
    }

</style>
                        <div class="dashboardcenter">
                            <span>Dashboard</span>
                            <small>Welcome to James-Street ({{Auth::user()->username}}) </small>
                        </div>
                        <div class="row">
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="yourstatus">
                                    <ul>
                                        <li>
                                            <span>Your Mentorship Status</span>
                                            <small>
                                                <p>{{$users->order->membership->title ?? 'No Mentorship Selected' }}</p>
                                                <a href="{{url('mentorship-plans-and-pricing')}}"><button type="submit" class="btn btn_yellow" {{$count_order > 2 ? 'hidden' : ''}}>Upgrade Mentorship</button></a>
                                            </small>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="weeklytop">
                                    <div></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                            </div>
                        </div>
                        <div class="container">
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END Main Dashboard Section -->
</main>

@include('crm-client.layouts.footer')
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
                    title:'Booked',
                    start:'{{$met->date.' '.$met->start_time}}',
                    end:'{{$met->date.' '.$met->end_time}}',
                    color:'blue',
                },
                @endforeach
            ],

        });
        calendar.render();
    });

</script>