<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SharingModel;
use Illuminate\Support\Facades\Storage;

class SharingController extends Controller
{
    public function sharing_list(){
        $sharing =  SharingModel::orderBy('id','asc')->get();
        return view('admin/sharing/sharing-list',compact('sharing'));
    }
    public function add_edit_sharing(Request $request, SharingModel $sharing){
        $create = 1;
        (isset($sharing->id) and $sharing->id>0)?$create=0:$create=1;
        if($request->hasFile('attachments'))
        {
            $imageName = time().'.'.$request->attachments->getClientOriginalExtension();
            $request->attachments->move(public_path('/uploads/sharing'), $imageName);
            $sharing->attachments = $imageName;
        }
        $sharing->category = $request->category;
        $sharing->title = $request->title;
        $sharing->image_doc = $request->doc_link;
        $sharing->video_link = $request->video_link;
        $sharing->status = $request->status;
        $sharing->save();
        return back()->with('success','Submitted Successfully');
    }
    public function add_sharing(){
        return view('admin/sharing/add-sharing');
    }
    public function edit_sharing(SharingModel $sharing){
        return view('admin/sharing/edit-sharing',compact('sharing'));
    }
    public function delete_sharing(SharingModel $sharing){
        $sharing->delete();
        return back()->with('deleted','Deleted Successfully');
    }
}
