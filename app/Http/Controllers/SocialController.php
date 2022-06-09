<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        $this->_registerOrLoginUser($user);
        if(session()->has('membership_id')){
            return redirect('/checkout/'.session()->get('membership_id'));
        }
        else{
            return redirect('/');
        }
    }
    //facebook
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $this->_registerOrLoginUser($user);
        return redirect('/checkout/'.session()->get('membership_id'));
    }
    protected function _registerOrLoginUser($data)
    {
        $user = User::where('email',$data->email)->first();
        if(!$user){
            $user= new User();
            $user->username = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->user_role = 2;
            $user->save();
        }
        Auth::login($user);
    }
}
