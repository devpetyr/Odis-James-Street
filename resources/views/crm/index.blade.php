@include('crm.layouts.header')
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
                            <!--<small>Welcome Lorem Ipsum, Lipsum rd.</small>-->
                        </div>
                        <div class="row">
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="yourstatus">
                                    <ul>
                                        <li>
                                            <span>Your Status</span>
                                            <small>
                                                <p>Admin</p>
                                                 
                                            </small>
                                        </li>
                                        <li>
                                            <span>Your Balance</span>
                                            <small>${{$total}}</small>
                                        </li>
                                       
                                    </ul>
                                </div>
                                <!--<div class="Pending">-->
                                <!--    <span>Pending Payment</span>-->
                                <!--    <div class="progress">-->
                                <!--        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <div class="weeklytop">
                                    <div></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="myprograss">
                                    <div class="progress blue">
                        <span class="progress-left">
                        <span class="progress-bar"></span>
                        </span>
                                        <span class="progress-right">
                        <span class="progress-bar"></span>
                        </span>
                                        <div class="progress-value">{{$total}} <small>Usd</small></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="row">-->
                        <!--    <div class="col-md-12 col-sm-4 col-xs-12">-->
                        <!--        <div class="Charts">-->
                        <!--            <div class="card">-->
                        <!--                <div class="card-header border-0">-->
                        <!--                    <div class="d-flex justify-content-between">-->
                        <!--                        <h3 class="card-title">Online Store Visitors</h3>-->
                        <!--                        <a href="javascript:void(0);">View Report</a>-->
                        <!--                        <a href="javascript:void(0)" id="lod">Loader Button</a>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="card-body">-->
                        <!--                    <div class="d-flex">-->
                        <!--                        <p class="d-flex flex-column">-->
                        <!--                            <span class="text-bold text-lg">820</span>-->
                        <!--                            <span>Visitors Over Time</span>-->
                        <!--                        </p>-->
                        <!--                        <p class="ml-auto d-flex flex-column text-right">-->
                        <!--      <span class="text-success">-->
                        <!--      <i class="fas fa-arrow-up"></i> 12.5%-->
                        <!--      </span>-->
                        <!--                            <span class="text-muted">Since last week</span>-->
                        <!--                        </p>-->
                        <!--                    </div>-->
                                            <!-- /.d-flex -->
                        <!--                    <div class="position-relative mb-4">-->
                        <!--                        <canvas id="visitors-chart" height="200"></canvas>-->
                        <!--                    </div>-->
                        <!--                    <div class="d-flex flex-row justify-content-end">-->
                        <!--    <span class="mr-2">-->
                        <!--    <i class="fas fa-square text-primary"></i> This Week-->
                        <!--    </span>-->
                        <!--                        <span>-->
                        <!--    <i class="fas fa-square text-gray"></i> Last Week-->
                        <!--    </span>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    <!-- /.card -->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <canvas id="myChart" width="400" height="200"></canvas>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="upcominmg">
                                            <span>Upcoming Meetings</span>
                                        </div>
                                    </div>
                                    <!--<div class="col-md-6 col-sm-6 col-xs-12">-->
                                    <!--    <div class="upcominmg">-->
                                    <!--        <span>Upcoming Events</span>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                                @foreach($schedule as $scheduledata)
                                <div class="selectcheck">
                                   
                                    <div class="form-check">
                                        <!--<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">-->
                                        <label class="form-check-label col-sm-2" for="flexCheckDefault">
                                            <span><i class="fa fa-user-circle" aria-hidden="true"></i> {{$scheduledata->fullname}}</p>
                                        </label>
                                        <label class="form-check-label col-sm-2" for="flexCheckDefault">
                                            <span><i class="fa fa-envelope" aria-hidden="true"></i> {{$scheduledata->email}}</p>
                                        </label>
                                        <label class="form-check-label col-sm-2" for="flexCheckDefault">
                                            <span><i class="fa fa-phone" aria-hidden="true"></i> {{$scheduledata->phone_no}}</p>
                                        </label>
                                        <label class="form-check-label col-sm-2" for="flexCheckDefault">
                                            <span><i class="fa fa-calendar" aria-hidden="true"></i> {{$scheduledata->created_at->toDateString()}}</p>
                                        </label>
                                    </div>
                                    
                                    <!--<div class="form-check">-->
                                    <!--    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>-->
                                    <!--    <label class="form-check-label" for="flexCheckChecked">-->
                                    <!--        <span>Lorem Ipsum is simply dummy text of the printing.</span>-->
                                    <!--        <p>Simply dummy text of the printing and typesetting .Simply dummy text of the printing and typesetting Simply dummy text of the printing . . .</p>-->
                                    <!--    </label>-->
                                    <!--</div>-->
                                </div>
                                @endforeach
                                @if(!isset($scheduledata))
                                    <div class="form-check">
                                        <label class="form-check-label col-sm-2" for="flexCheckDefault">
                                            <p>No Upcoming Meetings</p>
                                        </label>
                                        
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END Main Dashboard Section -->
</main>

@include('crm.layouts.footer')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>


let labels = [
  'January',
  'February',
  'March',
  'April',
  'May',
  'June',
  'July',
  'August',
  'September',
  'October',
  'November',
];
let data = {
  labels: labels,
  datasets: [{
    label: 'Sales',
    backgroundColor: 'rgb(212, 175, 55)',
    borderColor: 'rgb(212, 175, 55)',
    data: [7000, 8000, 4000, 2000, 2000, 3000, 4500],
  }]
};
let test = [];
@foreach($graph as $key => $value)
data.datasets[0].data[{{$key}}] = {{$value}};
@endforeach

console.log(data.datasets[0].data)

  const config = {
  type: 'line',
  data,
   options: {
        scales: {
            y: {
                suggestedMin: 1000,
                suggestedMax: 10000
            }
        }
    }
};




 var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
  

 
</script>
