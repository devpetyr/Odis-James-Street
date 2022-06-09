<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ConfigModel;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function config(){
        $config =  ConfigModel::find('1');
        return view('admin/config/config',compact('config'));
    }
    public function config_data(Request $request, ConfigModel $config){
        $config =  ConfigModel::find('1');
        $config->email = $request->email;
        $config->phone = $request->phone;
        $config->currency = $request->currency;
        $config->address = $request->address;
        $config->fb_link = $request->fb_link;
        $config->twitter_link = $request->twitter_link;
        $config->insta_link = $request->insta_link;
        $config->linkedin_link = $request->linkedin_link;
        $config->copyright = $request->copyright;
        $config->mins_price = $request->mins_price;
        $config->save();
        return back()->with('success','Updated Successfully');
    }
}
