@include('admin.layouts.header')
<div class="page-wrapper">
<div class="content">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <span class="dash-widget-bg1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                <div class="dash-widget-info text-right">
                    <h3>{{$events}}</h3>
                    <span class="widget-title1">Events <i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <span class="dash-widget-bg2"><i class="fa fa-shopping-cart"></i></span>
                <div class="dash-widget-info text-right">
                    <h3>{{$orders}}</h3>
                    <span class="widget-title2">Orders <i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <span class="dash-widget-bg3"><i class="fa fa-handshake-o" aria-hidden="true"></i></span>
                <div class="dash-widget-info text-right">
                    <h3>{{$meetings}}</h3>
                    <span class="widget-title3">Meetings <i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <span class="dash-widget-bg4"><i class="fa fa-users" aria-hidden="true"></i></span>
                <div class="dash-widget-info text-right">
                    <h3>{{$clients}}</h3>
                    <span class="widget-title4">Clients <i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@include('admin.layouts.footer')
