<?php

namespace App\Http\Controllers\crm;
use App\Http\Controllers\Controller;
use App\Models\OrderModel;
use App\Models\User;
use App\Models\Notes;
use App\Models\Msgs;
use App\Models\Referal;
use App\Models\EventsModel;
use App\Models\Odis_days;
use App\Models\EventOrders;
use App\Models\ScheduleModel;
use App\Models\EmailTemplateModel;
use App\Models\ForRealStateInvestorsModel;
use Illuminate\Http\Request;
use App\Mail\Template;
use Auth;
use Mail;
use Carbon\Carbon;
use Hash;

class CRMController extends Controller
{
    public function index(){
        $orders = OrderModel::with('user','membership')->orderBy('id','ASC')->get();
        $total=0;
        $graph=[0,0,0,0,0,0,0,0,0,0,0,0];
        
        foreach($orders as $value)
        {
            $total+= $value->order_price;
            if($value->created_at >= date('Y').'-01-01' and $value->created_at <= date('Y').'-01-31')
            {
                $graph[0]+=$value->order_price;
            }
            if($value->created_at >= date('Y').'-02-01' and $value->created_at <= date('Y').'-02-31')
            {
                $graph[1]+=$value->order_price;
            }
            
            if($value->created_at >= date('Y').'-03-01' and $value->created_at <= date('Y').'-03-31')
            {
                $graph[2]+=$value->order_price;
            }
            if($value->created_at >= date('Y').'-04-01' and $value->created_at <= date('Y').'-04-31')
            {
                $graph[3]+=$value->order_price;
            }
            if($value->created_at >= date('Y').'-04-01' and $value->created_at <= date('Y').'-04-31')
            {
                $graph[3]+=$value->order_price;
            }
            if($value->created_at >= date('Y').'-05-01' and $value->created_at <= date('Y').'-05-31')
            {
                $graph[4]+=$value->order_price;
            }
            if($value->created_at >= date('Y').'-06-01' and $value->created_at <= date('Y').'-06-31')
            {
                $graph[5]+=$value->order_price;
            }
            if($value->created_at >= date('Y').'-07-01' and $value->created_at <= date('Y').'-07-31')
            {
                $graph[6]+=$value->order_price;
            }
            if($value->created_at >= date('Y').'-08-01' and $value->created_at <= date('Y').'-08-31')
            {
                $graph[7]+=$value->order_price;
            }
            if($value->created_at >= date('Y').'-09-01' and $value->created_at <= date('Y').'-09-31')
            {
                $graph[8]+=$value->order_price;
            }
            if($value->created_at >= date('Y').'-10-01' and $value->created_at <= date('Y').'-10-31')
            {
                $graph[9]+=$value->order_price;
            }
            if($value->created_at >= date('Y').'-11-01' and $value->created_at <= date('Y').'-11-31')
            {
                $graph[10]+=$value->order_price;
            }
            if($value->created_at >= date('Y').'-12-01' and $value->created_at <= date('Y').'-12-31')
            {
                $graph[11]+=$value->order_price;
            }
        }
      
       $schedule = ScheduleModel::orderBy('id','ASC')
        ->whereDate('created_at', Carbon::today())->get();
        return view('crm/index',compact('total','schedule','graph'));
    }
    public function orders(){
        $orders = OrderModel::with('user','membership')->orderBy('id','ASC')->get();
       
        return view('crm/orders',compact('orders'));
    }
    public function messages(){
        $users = User::where('user_role',2)->orderBy('id','ASC')->get();
        return view('crm/messages',compact('users'));
    }
    public function users(){
        $users = User::with('order.membership')->where('user_role',2)->orderBy('id','ASC')->get();
        return view('crm/users',compact('users'));
    }
    public function deleteUserSelection(Request $request)
    {
        $this->validate($request, [
            'selection' => 'required'
        ],
        [
            'selection.required' => 'Kindly select users...!'
        ]);

        $deleteSelection = User::wherein('id',$request->selection)->delete();
        return back()->with('success','Deleted Successfully');
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
           // return redirect()->back()->with([ 'id' => $user->id,'name'=>$user->username ] );
            return response()->json(['status'=>1,'id'=>$user->id,'name' => $user->username]);
        }
    }
    public function get_notes(Request $req)
    {
        $notes = Notes::where('user_id',$req->id)->first();
        if($notes==null)
        {
            return response()->json(['msg' => 'no notes yet','id'=>$req->id,'status'=>0]);
        }
        else
        {
            return response()->json(['msg' => $notes->msg,'id'=>$notes->user_id,'notes'=>$notes,'status'=>1]);
        }
        
    }
    public function add_update_notes(Request $req)
    {
        $notes = Notes::where('user_id',$req->id)->first();
       
       
        if($notes==null)
        {
            
            $n = new Notes();
            if($req->hasFile('file'))
            {
                $imageName1 = time().'.'.$req->file->getClientOriginalExtension();
                $req->file->move(public_path('/uploads/crm'), $imageName1);
                $n->file = $imageName1;
            }
            $n->title= $req->title;
            $n->user_id = $req->id;
            $n->msg = $req->msg;
            $n->save();
            
        }
        else
        {
             if($req->hasFile('file'))
        {
            $imageName1 = time().'.'.$req->file->getClientOriginalExtension();
            $req->file->move(public_path('/uploads/crm'), $imageName1);
            $notes->file = $imageName1;
        }
            $notes->title= $req->title;
            $notes->msg=$req->msg;
            $notes->save();
            
        }
        return back();
    }
    public function reports(){
            $orders = OrderModel::with('user','membership')->orderBy('id','ASC')->get();
            return view('crm/reports',compact('orders'));
    }
    public function reports_filter(Request $request){

        /*getting filtered clients*/
        $allrequest = $request->except('_token');
        if(!$request->exists){
            return back();
        }
        $orders = OrderModel::query();
        if(isset($request->date_from) and !isset($request->date_to)){
            $request->date_to = $request->date_from;
        }  
          
          if(!isset($request->daily) and !isset($request->monthly) and !isset($request->yearly))
        {
           
            foreach($allrequest as $id => $value){
                if($id === 'date_from' OR $id === 'date_to'){
                    $orders = $orders
                        ->whereDate('created_at','>=',$request->date_from)
                        ->whereDate('created_at','<=',$request->date_to);
                }
                // else {
                //     $orders = $orders->where($id, $value);
                // }
            }
        }
        else
        {
      
            if(isset($request->daily))
            {
                $request->date_from = $request->daily;
            $request->date_to = $request->daily;
                
            }
            else if(isset($request->monthly))
            {
                $request->date_from = date('Y-m-d',strtotime("-6 months"));
            $request->date_to = $request->monthly;
            }
            else if(isset($request->yearly))
            {
                $request->date_from = date('Y-m-d',strtotime("-12 months"));
            $request->date_to = $request->yearly;
            }
            
            $orders = $orders
                    ->whereDate('created_at','>=',$request->date_from)
                    ->whereDate('created_at','<=',$request->date_to);
        }
        $orders = $orders->get();
        return view('crm/reports',compact('orders'));
    }
    
    public function user_detail($id){
        $users = User::with('order.membership','notes','ref')->where('user_role',2)->where('id',$id)->first();
        $ref= Referal::all()->pluck('user_id')->toArray();
        $usersForReferals = User::where('user_role',2)->where('id','!=',$id)->whereNotIn('id',$ref)->get();
        $usersSelectedRef = User::with('ref.user_reffered')->where('id',$id)->get();
        return view('crm/user-detail',compact('users','usersForReferals','usersSelectedRef'));
    }
    // public function add_referals(Request $request){
    //     $ref = new Referal();
    //     $ref->refered_by = $request->user_id;
    //     $ref->user_id = $request->refferedby;
    //     $ref->save();
    //     return back()->with('referal_added','Referal Added Successfully');
    // }
    public function order_detail($id){
        $orders = OrderModel::with('user','membership')->where('id',$id)->orderBy('id','ASC')->first();
        return view('crm/order-detail',compact('orders'));
    }
    public function register_referal(Request $request){
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->user_role = 2;
        if($user->save())
        {
            $ref = new Referal();
            $ref->refered_by = $request->ref_id;
            $ref->user_id=$user->id;
            $ref->save();
            return back()->with('ref_success','Referal Added Successfully');
        }
        return back()->with('ref_failed','Error');
    }
    public function events(){
        $events = EventsModel::orderBy('id','ASC')->get();
        return view('crm/events',compact('events'));
    }
    public function events_detail($id){
        $event_name = EventsModel::where('id',$id)->first();
        $events = EventOrders::where('event_id',$id)->orderBy('id','ASC')->get();
        $tickets_sold = EventOrders::where('event_id',$id)->where('payment_status','1')->sum('quantity');
        return view('crm/event-detail',compact('events','event_name','tickets_sold'));
    }
    public function events_add_customer(Request $request,$id){
        $events = new EventOrders();
        $events->first_name = $request->first_name;
        $events->last_name = $request->last_name;
        $events->address = $request->address;
        $events->city = $request->city;
        $events->phone = $request->phone;
        $events->email = $request->email;
        $events->postcode = $request->postcode;
        $events->event_id = $id;
        $events->quantity = $request->quantity;
        $events->total_price = $request->total_price*$request->quantity;
        $events->payment_status = 1;
        $events->payment_id = 'Paid Manually';
        $events->save();
        return back()->with('Add','Customer Added Successfully');
    }
    public function email_details(){
        $email_details = EmailTemplateModel::get();
        return view('crm/email-details',compact('email_details'));
    }
    public function email_format($name){
        $email_details = EmailTemplateModel::where('name',$name)->first();
        return view('crm/email_format',compact('email_details'));
    }
    public function email_send(Request $request){
        $email_details = EmailTemplateModel::where('id',$request->email_template)->first();
        Mail::to($request->send_to)->send(new Template($email_details));
        return back()->with('sent','Email has been sent!');
    }
    
    //meeting section
    public function meetings()
    {
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
        return view('crm.meetings.index',compact('meetings','allday','date','time'));
    }
    
    public function meeting_adjustment(Request $req)
    {
       
        if($req->type==1)
        {
            $del = Odis_days::where('type',1)->get();
            if($del!=null)
            {
                foreach($del as $d)
                {
                    $d->delete();
                }
            }
            foreach($req['days'] as $day)
            {
                $data = new Odis_days();
                $data->type=1;
                $data->day_or_date = $day;
                $data->save();
            }
            return response()->json([
                    'status' => 1,
                    'msg' => 'days updated'
                ]);
        }
        if($req->type==3)
        {
            $del = Odis_days::where('type',3)->get();
            if($del!=null)
            {
                foreach($del as $d)
                {
                    $d->delete();
                }
            }
           
                $data = new Odis_days();
                $data->type=3;
                $data->start = $req->st_time;
                $data->end = $req->end_time;
                if($data->save())
                {
                   return response()->json([
                    'status' => 1,
                    'msg' => 'Time updated'
                ]); 
                }

        }
        if($req->type==2)
        {

           $data = new Odis_days();
                $data->type=2;
                $data->day_or_date =$req->date;
                if($data->save())
                {
                   return response()->json([
                    'status' => 1,
                    'msg' => 'Date updated'
                ]); 
                } 
        }
    }
    public function appointment_details(ScheduleModel $schedule){
        return view('crm.meetings.appointment-details',compact('schedule'));
    }
    
    public function user_add(){
        return view('crm.users-add');
    }
    public function user_add_data(Request $request, User $user){
        $request->validate([
            'username' => 'required|max:255',
            'email'=>'required|email|unique:users',
        ]);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->user_role = 2;
        $user->save();
        //email shoot
        $email_details = EmailTemplateModel::where('id','10')->first();
        Mail::to($user->email)->send(new Template($email_details));   
        //logging in user
        //Auth::login($user);
        return back()->with('success_signup','New User Added Successfully');
    }
    public function user_delete(User $user)
    {
        $user->delete();
        return back()->with('success','Deleted Successfully');
    }
    public function update_user(User $user, Request $request) 
    {
        if($user->provider_id === null){
            $user->username = $request->username;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->save();
            return back()->with('success','User updated successfully');
        }
        else{
            return back()->with('failed','You cant make changes on google ID.');
        }
    }
    public function real_state_investors()
    {
        $referals = ForRealStateInvestorsModel::get();
        return view('crm.real-state-investors',compact('referals'));
    }
    
    
}
