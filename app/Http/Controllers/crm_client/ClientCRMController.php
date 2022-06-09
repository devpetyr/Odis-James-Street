<?php

namespace App\Http\Controllers\crm_client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderModel;
use App\Models\Odis_days;
use App\Models\SharingModel;
use App\Models\ScheduleModel;
use App\Models\User;
use App\Models\FileStorageModel;
use Auth;
use App\Models\Msgs;
use DateTime;
use Spatie\GoogleCalendar\Event;
use Carbon;

class ClientCRMController extends Controller
{
    public function index(){
        $users = User::with('order')->where('id',Auth::user()->id)->OrderBy('id','DESC')->first();
        $order = OrderModel::where('user_id',Auth::user()->id)->OrderBy('id','DESC')->get();
        $count_order = count($order);
        /**meeting**/
            $meetings = ScheduleModel::all();
            $days = Odis_days::where('type',1)->get();
            $date = Odis_days::where('type',2)->get();
            $time = Odis_days::where('type',3)->first();
            $allday=[];
            foreach($days as $d)
            {
                if($d->day_or_date==01)
                {
                    array_push($allday,"Mon");
                }
                if($d->day_or_date==02)
                {
                    array_push($allday,"Tue");
                }
                if($d->day_or_date==03)
                {
                    array_push($allday,"Wed");
                }
                if($d->day_or_date==04)
                {
                    array_push($allday,"Thu");
                }
                if($d->day_or_date==05)
                {
                    array_push($allday,"Fri");
                }
                if($d->day_or_date==06)
                {
                    array_push($allday,"Sat");
                }
                if($d->day_or_date==07)
                {
                    array_push($allday,"Sun");
                }
            }
        return view('crm-client/index',compact('users','count_order','meetings','allday','date','time'));
    }
    public function messages(){
        return view('crm-client/messages');
    }
    public function reports(){
        return view('crm-client/reports');
    }
    public function profile(){
        $users = User::with('order.membership')->where('user_role',2)->where('id',Auth::user()->id)->first();
        return view('crm-client/profile',compact('users'));
    }
    public function profile_update(User $user ,Request $request){
        $create =1;
        $create = (isset($user->id)&&$user->id>0)?$create=0:$create=1;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->user_role = 2;
        $user->save();
        return back()->with('update','Updated Successfully');
    }
    public function profile_password_rest(User $user ,Request $request){

            $create =1;
            $create = (isset($user->id)&&$user->id>0)?$create=0:$create=1;
        if($request->old_password === $user->password){
            $user->password = $request->new_password;
            $user->user_role = 2;
            $user->save();
            return back()->with('reset','Reset Successfully');
        }
        else{
            return back()->with('oldpass','Old-Password is incorrect');
        }
    }

    public function getmsg(Request $req)
    {
        $id = $req->id;
        $msgs =  Msgs::where(function ($query) use ($id) {
        $query->where('sender_id', '=', $id)
        ->orWhere('rec_id', '=', $id);
        })->get();

        if(count($msgs)==0)
        {
            return response()->json(['status'=>0,'msg' => 'no msgs yet']);
        }
        else
        {
            return response()->json(['status'=>1,'msg' => $msgs]);
        }
    }
    public function sendmsg(Request $req)
    {
        $msgs = new Msgs();
        $msgs->sender_id = Auth::user()->id;
        $msgs->rec_id= $req->reciever;
        $msgs->msg= $req->msg;
        if($msgs->save())
        {
            $user= User::where('id',$req->reciever)->first();
            return response()->json(['status'=>1,'id'=>$user->id,'name' => $user->username]);
        }
    }
    public function sharing(){
        $sharing = SharingModel::get();
        return view('crm-client/sharing',compact('sharing'));
    }
    public function sharing_details($category){
        $sharing =  SharingModel::orderBy('id','asc')->where('category',$category)->where('status','1')->get();
        return view('crm-client/sharing-details',compact('sharing'));
    }
    public function consultation(){
        $days = Odis_days::where('type',3)->first();
        $slots = $this->getServiceScheduleSlots(30,$days->start,$days->end);
        return view('crm-client/1-on-1-consultation',compact('slots'));
    }
    public function time_session(Request $req)
    {

        $arr['start'] = '';
        $arr['end'] = '';
        $arr['date']= '';
        session()->put('booking',$arr);

        $dayarr = array('Mon'=>01,'Tue'=>02,'Wed'=>03,'Thu'=>04,'Fri'=>05,'Sat'=>06,'Sun'=>07);
        $timestamp = strtotime($req->date);
        $day = date('D', $timestamp);
        $check = Odis_days::where('day_or_date',$req->date)->orWhere('day_or_date',$dayarr[$day])->first();
        $timet = explode('-',$req->time);
        $booked = ScheduleModel::where('start_time',$timet[0])->where('end_time',$timet[1])->where('date',$req->date)->first();

        if($check==null and $booked == null)
        {
            $time = explode('-',$req->time);
            $arr['start'] = $time[0];
            $arr['end'] = $time[1];
            $arr['date']= $req->date;
            session()->put('booking',$arr);

            return response()->json([
                'status' => 1,
                'msg' => 'Available'
            ]);
        }
        else
        {
            if($check!=null)
            {
                return response()->json([
                    'status' => 2,
                    'msg' => 'Sorry not available. Kindly Select another time or date'
                ]);
            }
            if($booked!=null)
            {
                return response()->json([
                    'status' => 2,
                    'msg' => 'Sorry someone else has booked this slot'
                ]);
            }
        }
    }
    function getServiceScheduleSlots($duration, $start,$end)
    {
        $start = new DateTime($start);
        $end = new DateTime($end);
        $start_time = $start->format('H:i');
        $end_time = $end->format('H:i');
        $i=0;
        while(strtotime($start_time) <= strtotime($end_time)){
            $start = $start_time;
            $end = date('H:i',strtotime('+'.$duration.' minutes',strtotime($start_time)));
            $start_time = date('H:i',strtotime('+'.$duration.' minutes',strtotime($start_time)));
            $i++;
            if(strtotime($start_time) <= strtotime($end_time)){
                $time[$i]['start'] = $start;
                $time[$i]['end'] = $end;
            }
        }
        return $time;
    }
    function addschedule(Request $request){
        $data = session()->get('booking');
        /* setting data to google calendar*/
        $event = new Event();
        $event->name = '30-min-consultation';
        $event->startDateTime = Carbon\Carbon::parse($data['date'].' '.$data['start'],'America/Los_Angeles');
        $event->endDateTime = Carbon\Carbon::parse($data['date'].' '.$data['start'],'America/Los_Angeles')->addMinutes(30);
        $event->save();
        /* inserting data to orders table */
        $schedule = New ScheduleModel();
        $schedule->fullname = $request->fullname;
        $schedule->email = $request->email;
        $schedule->phone_no = $request->phone_no;
        $schedule->address = $request->address;
        $schedule->country = $request->country;
        $schedule->city = $request->city;
        $schedule->state = $request->state;
        $schedule->zip = $request->zip;
        $schedule->note = $request->note;
        $schedule->status = 1;
        $schedule->payment_id = '0';
        $schedule->start_time = $data['start'];
        $schedule->end_time = $data['end'];
        $schedule->date = $data['date'];
        $schedule->user_id = (Auth::user())?Auth::user()->id:0;
        $schedule->save();
        return back()->with('scheduled','Successfully Schedule Your Meeting');
    }
    /**meetings*/


    /***File storage starts*/
    function file_storage(){
        $filestorage = FileStorageModel::where('user_id',Auth()->user()->id)->get();
        return view('crm-client/file-storage',compact('filestorage'));
    }

    function user_upload_file(FileStorageModel $filestorage, Request $request){
        $create = 1;
        (isset($filestorage->id) and $filestorage->id>0)?$create=0:$create=1;
        if($request->hasFile('file'))
        {
            $imageName = time().'.'.$request->file->getClientOriginalExtension();
            $request->file->move(public_path('/uploads/filestorage'), $imageName);
            $filestorage->file = $imageName;
        }
        $filestorage->user_id = Auth()->user()->id;
        $filestorage->is_read = 0;
        $filestorage->save();
        if($create == 0)
        {
            return back()->with('update','Updated Successfully');
        }
        else
        {
            return back()->with('success','Added Successfully');
        }
    }

    /***File storage ends*/

    /**mentorship files starts*/
    function mentorship_files()
    {
        $membership = OrderModel::with('membership.getmembershipfiles')->where('user_id',Auth::user()->id)->first();
        return view('crm-client.mentorship-files',compact('membership'));
    }
    /**mentorship files ends*/



}
