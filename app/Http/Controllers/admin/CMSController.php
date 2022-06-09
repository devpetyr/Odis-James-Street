<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\BannerModel;
use App\Models\CMSModel;
use Illuminate\Http\Request;

class CMSController extends Controller
{
    public function cms_list(){
        $CMSModel =  CMSModel::orderBy('id','asc')->get();
        return view('admin/cms/cms-list',compact('CMSModel'));
    }
    public function add_cms(){
        return view('admin/cms/add-cms');
    }
    public function add_edit_cms(Request $request, CMSModel $cms){
        if($request->hasFile('image_1'))
        {
            $imageName1 = time().'.'.$request->image_1->getClientOriginalExtension();
            $request->image_1->move(public_path('/uploads/cms'), $imageName1);
            $cms->image_1 = $imageName1;
        }
        if($request->hasFile('image_2'))
        {
            $imageName2 = '1'.time().'.'.$request->image_2->getClientOriginalExtension();
            $request->image_2->move(public_path('/uploads/cms'), $imageName2);
            $cms->image_2 = $imageName2;
        }
        if($request->hasFile('video_1'))
        {
            $videoName1 = time().'.'.$request->video_1->getClientOriginalExtension();
            $request->video_1->move(public_path('/uploads/cms'), $videoName1);
            $cms->video_1 = $videoName1;
        }
        if($request->hasFile('video_2'))
        {
            $videoName2 = '1'.time().'.'.$request->video_2->getClientOriginalExtension();
            $request->video_2->move(public_path('/uploads/cms'), $videoName2);
            $cms->video_2 = $videoName2;
        }
        $cms->page = $request->page;
        $cms->title = $request->title;
        $cms->sub_heading = $request->sub_heading;
        $cms->description_1 = $request->description_1;
        $cms->description_2 = $request->description_2;
        $cms->status = $request->status;
        $cms->save();
        return back()->with('success','Submitted Successfully');
    }
    public function edit_cms($cms){
        $CMSModel =  CMSModel::find($cms);
        return view('admin/cms/edit-cms',compact('CMSModel'));
    }
    public function delete_cms(CMSModel $cms){
        $cms->delete();
        return back()->with('deleted','Deleted Successfully');
    }

}
