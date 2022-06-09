<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\MembershipModel;
use App\Models\MembershipFileStorageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Session;
//use Illuminate\Support\Facades\Storage;
//use Intervention\Image\Facades\Image;
//use Illuminate\Support\Facades\File;

class MembershipController extends Controller
{
    public function membership_list(){
        $Membership =  MembershipModel::orderBy('id','asc')->get();
        return view('admin/membership/membership-list',compact('Membership'));
    }
    public function add_membership(){
        return view('admin/membership/add-membership');
    }
    public function add_edit_membership(Request $request, MembershipModel $membership){
        $membership->title = $request->title;
        $membership->sub_heading = $request->sub_heading;
        $membership->sub_title = $request->sub_title;
        $membership->price = $request->price;
        $membership->description = $request->description;
        $membership->status = $request->status;
        $membership->save();
        return back()->with('success','Submitted Successfully');
    }
    public function edit_membership($membership){
        $MembershipModel =  MembershipModel::find($membership);
        return view('admin/membership/edit-membership',compact('MembershipModel'));
    }
    public function delete(MembershipModel $membership){
        $membership->delete();
        return back()->with('deleted','Deleted Successfully');
    }
    public function file_storage(){
        $membership =  MembershipModel::orderBy('id','asc')->get();
        $membership_file_storage =  MembershipFileStorageModel::with('getMentorship')->orderBy('id','asc')->get();
        return view('admin/membership/file-storage',compact('membership','membership_file_storage'));
    }
    public function files_membership($membership){
        $membership_file_storage =  MembershipFileStorageModel::with('getMentorship')->where('membership_id',$membership)->orderBy('id','asc')->get();
        return view('admin/membership/file-membership',compact('membership_file_storage'));
    }
    public function file_storage_post(Request $request){
        $validated = $request->validate([
            'membership'=>['required'],
            'File'     => ['required'],
        ]);
        if($request->hasFile('File')) {
            $imageName = time() . rand(999,99999) . '.' . $request->File->getClientOriginalExtension();
            $request->File->move(public_path('/uploads/membership-filestorage/'), $imageName);
        }

        foreach($request->membership as $key=> $value){
            $filestorage =  new MembershipFileStorageModel();
            $filestorage->membership_id = $value;
            $filestorage->file = $imageName;
            $filestorage->save();
        }
        return back()->with('success','Submitted Successfully');
    }
    public function deleteFile(MembershipFileStorageModel $membership){
        $membership->delete();
        return back()->with('deleted','Deleted Successfully');
    }

}
