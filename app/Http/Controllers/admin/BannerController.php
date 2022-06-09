<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BannerModel;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function banner_list(){
        $bannerModel =  BannerModel::orderBy('id','asc')->get();
        return view('admin/banner/banner-list',compact('bannerModel'));
    }
    public function add_edit_banner(Request $request, BannerModel $banner){
        $create = 1;
        (isset($banner->id) and $banner->id>0)?$create=0:$create=1;
        if($request->hasFile('images'))
        {
            $imageName = time().'.'.$request->images->getClientOriginalExtension();
            $request->images->move(public_path('/uploads/banners'), $imageName);
            $banner->images = $imageName;
        }
        $banner->heading = $request->heading;
        $banner->description = $request->description;
        $banner->status = $request->status;
        $banner->save();
        return back()->with('success','Submitted Successfully');
    }
    public function add_banner(){
        return view('admin/banner/add-banner');
    }
    public function edit_banner($banner){
        $bannerModel =  BannerModel::find($banner);
        return view('admin/banner/edit-banner',compact('bannerModel'));
    }
    public function delete(BannerModel $banner){
        $banner->delete();
        return back()->with('deleted','Deleted Successfully');
    }
}
