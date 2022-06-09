<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\OrderModel;
use App\Models\User;
use App\Models\Notes;
use App\Models\Msgs;
use App\Models\Referal;
use App\Models\EventsModel;
use App\Models\Odis_days;
use App\Models\EventOrders;
use App\Models\ScheduleModel;

class DashboardController extends Controller
{
    public function dashboard(){
        $orders = Count(OrderModel::get());
        $clients = Count(User::where('user_role',2)->get());
        $events = Count(EventsModel::orderBy('id','ASC')->get());
        $meetings = Count(ScheduleModel::get());
        return view('admin/dashboard',compact('events','orders','meetings','clients'));
    }
}
