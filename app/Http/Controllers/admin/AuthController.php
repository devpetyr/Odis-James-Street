<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class AuthController extends Controller
{
    public function login(){
        return view('admin/login');
    }
    public function login_data(Request $req)
    {
        if(!empty($req->email)&&!empty($req->password)){
            $userfind=User::where('email',$req->email)->where('user_role','1')->first();
            if($userfind){
                /*means found user*/
                if(Hash::check($req->password,$userfind->password)){
                    /*matched password*/
                    Auth::login($userfind);
                    if(Auth::check()){
                        return redirect(route('crm_dashboard_page'));
                    }else{
                        return redirect('/admin');
                    }
                    /*matched password end*/
                }else{
                    return redirect('/admin')->with('Failed_Password','Password is incorrect')->with('email',$req->email);
                }
                /*means found user end*/
            }else{
                return redirect('/admin')->with('Failed_Email','Email not found');
            }
        }else{
            return redirect('/admin')->with('Failed_Empty','Please fill required fields');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin');
    }
}
