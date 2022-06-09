<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use App\Mail\Signup;
use App\Mail\EventTicket;
use App\Models\AppointmentsModel;
use App\Models\BannerModel;
use App\Models\CMSModel;
use App\Models\Odis_days;
use App\Models\ContactModel;
use App\Models\EventOrders;
use App\Models\EventsModel;
use App\Models\EmailTemplateModel;
use App\Mail\Template;
use App\Models\MembershipModel;
use App\Models\OrderModel;
use App\Models\ScheduleModel;
use App\Models\ServicesModel;
use App\Models\TestimonialsModel;
use App\Models\User;
use App\Models\ConfigModel;
use App\Models\UserModel;
use App\Models\ForRealStateInvestorsModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Stripe;
use DateTime;
use Hash, DB;
use Mail;
use Carbon;
use Spatie\GoogleCalendar\Event;


class HomeController extends Controller
{
    public function __construct(){
        $testimonials =  TestimonialsModel::orderBy('id','asc')->where('status','1')->get();
        $config = ConfigModel::orderBy('id','asc')->first();
        view()->share(['testimonials'=>$testimonials,'config'=>$config]);
    }
    public function index(){
        $bannerModel =  BannerModel::orderBy('id','asc')->where('status','1')->first();
        $CMSModel_section_1 =  CMSModel::orderBy('id','asc')->where('status','1')->where('page','Home-Section-1')->first();
        $CMSModel_section_golden_box =  CMSModel::orderBy('id','asc')->where('status','1')->where('page','Home-Section-Golden-Box')->first();
        $CMSModel_section_2_1 =  CMSModel::orderBy('id','asc')->where('status','1')->where('page','Home-section-2-part-1')->first();
        $CMSModel_section_2_2 =  CMSModel::orderBy('id','asc')->where('status','1')->where('page','Home-section-2-part-2')->first();
        $CMSModel_section_2_3 =  CMSModel::orderBy('id','asc')->where('status','1')->where('page','Home-section-2-part-3')->first();
        $CMSModel_section_3_1 =  CMSModel::orderBy('id','asc')->where('status','1')->where('page','Home-Section-3-part-1')->first();
        $CMSModel_section_3_2 =  CMSModel::orderBy('id','asc')->where('status','1')->where('page','Home-Section-3-part-2')->first();
        $CMSModel_section_4 =  CMSModel::orderBy('id','asc')->where('status','1')->where('page','Home-Section-4')->get();
        $CMSModel_section_5 =  CMSModel::orderBy('id','asc')->where('status','1')->where('page','Home-Section-5')->get();
        return view('index',compact('bannerModel','CMSModel_section_1','CMSModel_section_2_1','CMSModel_section_2_2','CMSModel_section_2_3','CMSModel_section_3_1','CMSModel_section_3_2','CMSModel_section_4','CMSModel_section_5','CMSModel_section_golden_box'));
    }
    public function services(){
        $services =  ServicesModel::orderBy('id','asc')->where('status','1')->get();
        return view('services',compact('services'));
    }
    public function membership_plans_and_pricing(){

        if(Auth::user() and Auth::user()->id>0)
        {
            $order = OrderModel::where('user_id',Auth::user()->id)->OrderBy('id','DESC')->first();
                if($order==null)
                {
                    $Membership =  MembershipModel::orderBy('id','asc')->where('status','1')->get();
                }
                else
                {
                    $Membership =  MembershipModel::orderBy('id','asc')->where('price','>',$order->membership->price)->where('status','1')->get();
                }
        }
        else
        {
            $Membership =  MembershipModel::orderBy('id','asc')->where('status','1')->get();
        }

        return view('membership-plans-and-pricing',compact('Membership'));
    }

    public function text_me(){
        return view('text-me');
    }
    public function book_odis_james(){
        return view('book-odis-james');
    }
    public function checkout($id, MembershipModel $membership){
        $membership =  MembershipModel::orderBy('id','asc')->where('status','1')->where('id',$id)->first();
        session()->put('membership_id', $id);
        if (Auth::check())
        {

            $order = OrderModel::where('user_id',Auth::user()->id)->OrderBy('id','DESC')->get();
            $count = count($order);

            if($count>0)
            {
                 $membership =  MembershipModel::orderBy('id','asc')->where('price','>',$order[0]->membership->price)->first();

                 if($membership==null)
                 {
                     return redirect(route('membership_plans_and_pricing_page'));
                 }

            }
            //for upgrading membership amount  starts
            $checkorder = OrderModel::where('user_id',Auth::user()->id)->get();
            $newamount=0;
            $amount=0;
                foreach($checkorder as $key =>$value)
                {
                   $amount+= $value->membership->price;
                }
                $newamount = $membership->price - $amount;
                $newamount==0?$newamount=2500:$newamount;
            //for upgrading membership amount  starts

        }
        else{
            $newamount = 0;
        }


        return view('checkout',compact('membership','newamount'));
    }
    public function contact(){
        return view('contact');
    }
    public function contact_data(Request $request, ContactModel $contact){
        $contact->name = $request->first_name.' '.$request->last_name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return back()->with('success','Submitted Successfully');
    }
    public function appointments(Request $request, AppointmentsModel $appointment){


        $appointment->first_name = $request->first_name;
        $appointment->last_name = $request->last_name;
        $appointment->phone_no = $request->phone_no;
        $appointment->email = $request->email;
        $appointment->subject = $request->subject;
        $appointment->company = $request->company;
        $appointment->message = $request->message;
        $appointment->type =1;
        $appointment->save();
        return back()->with('success','Submitted Successfully');
    }
    public function signup(Request $request, User $user){
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
        //Mail::to($user->email)->send(new Signup($user));   
        //logging in user
        Auth::login($user);
        return back()->with('success_signup','Successfully Sign Up');
    }
    public function login(Request $req){
        if(!empty($req->email)&&!empty($req->password)){
            $userfind=User::where('email',$req->email)->where('user_role','2')->first();
            if($userfind){
                /*means found user*/
                if(Hash::check($req->password,$userfind->password)){
                    /*matched password*/
                    Auth::login($userfind);
                    if(Auth::check()){
                        session()->put('useremail',$req->email);
                        return back();
                    }else{
                        return back();
                    }
                    /*matched password end*/
                }else{
                    return back()->with('Failed_Password','Password is incorrect')->with('email',$req->email);
                }
                /*means found user end*/
            }else{
                return back()->with('Failed_Email','Email not found');
            }
        }else{
            return back()->with('Failed_Empty','Please fill required fields');
        }
    }
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
    public function stripePost(Request $request)
    {
        $checkorder = OrderModel::where('user_id',Auth::user()->id)->get();
        if($checkorder==null)
        {
            /* stripe integration */
            $stripe = $this->stripe_payment(Auth::user()->email,$request->stripeToken,$request->price,'Membership Payments');
            /* inserting data to orders table */
            $orders = New OrderModel();
            $orders->user_id = Auth::user()->id;
            $orders->payment_id =$stripe->id;
            $orders->membership_id = $request->membership;
            $orders->order_price = $request->price;
            $orders->status = 0;
            $orders->save();
            Session::flash('success', 'Payment successful!');
            return back();
        }
        else
        {
            $amount=0;
            foreach($checkorder as $key =>$value)
            {
               $amount+= $value->membership->price;
            }

            $newamount = $request->price - $amount;
            $newamount==0?$newamount=2500:$newamount;
            $stripe = $this->stripe_payment(Auth::user()->email,$request->stripeToken,$newamount,'Membership Payments');
            /* inserting data to orders table */
            $orders = New OrderModel();
            $orders->user_id = Auth::user()->id;
            $orders->payment_id =$stripe->id;
            $orders->membership_id = $request->membership;
            $orders->order_price = $newamount;
            $orders->status = 0;
            $orders->save();
            Session::flash('success', 'Payment successful!');
            return back();

        }
    }

    public function stripeSchedulePost(Request $request)
    {

        $data = session()->get('booking');
//        $event = new Event();
//        $event->name = '30-min-consultation';
//        $event->startDateTime = Carbon\Carbon::parse($data['date'].' '.$data['start'],'Asia/Karachi');
//        $event->endDateTime = Carbon\Carbon::parse($data['date'].' '.$data['start'],'Asia/Karachi')->addMinutes(30);
//        $event->save();
        /* stripe integration */
        $stripe = $this->stripe_payment($request->email,$request->stripeToken,150,'Schedule Payments');

        /* inserting data to orders table */
        $schedule = New ScheduleModel();
        $schedule->fullname = $request->firstname.' '.$request->lastname;;
        $schedule->email = $request->email;
        $schedule->payment_id =$stripe->id;
        $schedule->phone_no = $request->phone_no;
        $schedule->address = $request->address;
        $schedule->country = $request->country;
        $schedule->city = $request->city;
        $schedule->state = $request->state;
        $schedule->zip = $request->zip;
        $schedule->status = 1;
        $schedule->start_time = $data['start'];
        $schedule->end_time = $data['end'];
        $schedule->date = $data['date'];
        $schedule->user_id = (Auth::user())?Auth::user()->id:0;

        if($schedule->save())
        {
            /*sending data to google calendar*/
            $event = new Event();
            $event->name = '30-min-consultation';
            $event->startDateTime = Carbon\Carbon::parse($data['date'].' '.$data['start'],'America/Los_Angeles');
            $event->endDateTime = Carbon\Carbon::parse($data['date'].' '.$data['start'],'America/Los_Angeles')->addMinutes(30);
            $event->save();
            Session::flash('success', 'Payment successful!');
            return back();
        }

    }
    public function forgotPassword(Request $request){
        $userfind=User::where('email',$request->email)->where('user_role','2')->first();

        if($userfind){
            $userfind->reset = 1;
            $userfind->save();
            Mail::to($userfind->email)->send(new ForgotPassword($userfind));
            return back()->with('sent','An email has been sent to you!');
        }else{
            return back()->with('Your email is not valid');
        }
    }
    public function email(){
        return view('forgot-password');
    }
    public function event_detail(EventsModel $events){
        $events_listing =  EventsModel::where('status',1)->orderBy('id','asc')->get();
        return view('event_detail',compact('events','events_listing'));
    }
    public function events(){
        $events =  EventsModel::where('status',1)->orderBy('id','asc')->get();
        return view('event_listing',compact('events'));
    }
    // public function reset_password(Request $request){

    //     $user = User::where('password',$request->hash)->first();
    //     $user->password = $request->password;
    //     $user->save();
    //     session()->forget('password');
    //     return back()->with('reset-success','Successfully Updated Password');
    // }
    // public function reset_password_view($password){
    //     session()->put('password',$password);
    //     return view('reset-password',compact('password'));
    // }
    public function reset_password(Request $request){
        $user = User::where('id',$request->id)->first();
        $user->reset = null;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('home_page')->with('reset-success','Successfully Updated Password');
    }
    public function reset_password_view(User $id){
        if($id !== null)
        {
            return view('reset-password',compact('id'));
        }else{
            return redirect()->route('home_page');
        }
    }
    public function event_buy_now(Request $request){
        session()->put('event_id',$request->event);
        session()->put('quantity',$request->quantity);

        return redirect(route('event_checkout_view'));
    }
    public function event_checkout_view(){
        $event_detail = EventsModel::where('id',session()->get('event_id'))->first();
        return view('event_checkout',compact('event_detail'));
    }
    public function event_checkout_data(Request $request){
        $event_data = new EventOrders();
        $event_data->first_name = $request->first_name;
        $event_data->last_name = $request->last_name;
        $event_data->address = $request->address;
        $event_data->city = $request->city;
        $event_data->phone = $request->phone;
        $event_data->email = $request->email;
        $event_data->postcode = $request->postcode;
        $event_data->ordernote = $request->ordernote;
        $event_data->event_id = $request->session()->get('event_id');
        $event_data->quantity = $request->session()->get('quantity');
        $event_data->total_price = $request->total_price;
        $event_data->save();
        if($event_data->save()){
            $request->session()->forget('event_id');
            $request->session()->forget('quantity');
        }
        return redirect('/event-payment/'.$event_data->id);
    }
    public function event_payment_view($id){
        $event_detail = EventOrders::where('id',$id)->first();
        return view('event_payment',compact('event_detail'));
    }
    public function stripe_events(Request $request){

        $stripe = $this->stripe_payment($request->email,$request->stripeToken,$request->total_price,'Event Ticket');
        $orders = EventOrders::where('id',$request->id)->first();
        $orders->payment_id =$stripe->id;
        $orders->payment_status = 1;
        $orders->save();
        Mail::to(env('ADMIN_EMAIL'))->send(new EventTicket($orders));
        return redirect(route('home_page'))->with('event_payment','Thank you for purchasing...');
    }
    public function term_condition(){
        return view('term-conditions');
    }
    public function privacy_policy(){
        return view('privacy-policy');
    }


    public function min_consult()
    {
        if(Auth()->check() ){
            return redirect()->route('home_page');
        }else{
            $days = Odis_days::where('type',3)->first();
            $slots = $this->getServiceScheduleSlots(30,$days->start,$days->end);
            $config = ConfigModel::first();
  
            return view('30-min-consult',compact('slots','config'));
        }
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

    function realStateInvestorsView()
    {
        return view('for-real-state-investors');
    }
    function realStateInvestorsPost(Request $request)
    {
        $referal = new ForRealStateInvestorsModel();
        $referal->name = $request->name;
        $referal->phone = $request->phone;
        $referal->email = $request->email;
        $referal->website = $request->website;
        $referal->city_state = $request->city_state;
        $referal->license_number = $request->license_number;
        $referal->save();
        return back()->with('success','Successfully submitted');
    }

}
