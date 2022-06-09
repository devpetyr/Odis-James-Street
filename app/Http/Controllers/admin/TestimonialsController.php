<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\TestimonialsModel;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function testimonials_list(){
        $testimonials =  TestimonialsModel::orderBy('id','asc')->get();
        return view('admin/testimonials/testimonials-list',compact('testimonials'));
    }
    public function add_edit_testimonials(Request $request, TestimonialsModel $testimonials){
        if($request->hasFile('images'))
        {
            $imageName = time().'.'.$request->images->getClientOriginalExtension();
            $request->images->move(public_path('/uploads/testimonials'), $imageName);
            $testimonials->image = $imageName;
        }
        $testimonials->description = $request->description;
        $testimonials->name = $request->name;
        $testimonials->designation = $request->designation;
        $testimonials->status = $request->status;
        $testimonials->save();
        return back()->with('success','Submitted Successfully');
    }
    public function add_testimonials(){
        return view('admin/testimonials/add-testimonials');
    }
    public function edit_testimonials($testimonials){
        $testimonials =  TestimonialsModel::find($testimonials);
        return view('admin/testimonials/edit-testimonials',compact('testimonials'));
    }
    public function delete(TestimonialsModel $testimonials){
        $testimonials->delete();
        return back()->with('deleted','Deleted Successfully');
    }
}
