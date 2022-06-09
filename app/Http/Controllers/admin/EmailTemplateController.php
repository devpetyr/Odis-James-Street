<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\EmailTemplateModel;
use Illuminate\Http\Request;

class EmailTemplateController extends Controller
{
    public function add_email(){
        return view('admin/email-template/add-email-template');
    }
    public function edit_email(EmailTemplateModel $email_template){
        return view('admin/email-template/edit-email-template',compact('email_template'));
    }
    public function email_list(){
        $email_template = EmailTemplateModel::get();
        return view('admin/email-template/email-template-list',compact('email_template'));
    }
    public function email_addedit(EmailTemplateModel $email_template, Request $request){
        $create =1;
        $create = (isset($email_template->id)&&$email_template->id>0)?$create=0:$create=1;
        $email_template->name = $request->name;
        $email_template->subject = $request->subject;
        $email_template->description = $request->description;
        $email_template->save();
        if($create === 0){
            return back()->with('Updated','Updated Successfully');
        }else{
            return back()->with('Added','Added Successfully');
        }
    }
    public function email_delete(EmailTemplateModel $email_template){
        $email_template->delete();
        return back()->with('Deleted','Successfully Deleted');
    }
}
