<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\ServicesModel;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function service_list()
    {
        $services =  ServicesModel::orderBy('id','asc')->get();
        return view('admin/services/services-list',compact('services'));
    }
    public function add_service()
    {
        return view('admin/services/add-service');
    }
    public function add_edit_service(Request $request, ServicesModel $service)
    {
        if($request->hasFile('image'))
        {
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads/services'), $imageName);
            $service->image = $imageName;
        }
        $service->name = $request->name;
        $service->description = $request->description;
        $service->status = $request->status;
        $service->save();
        return back()->with('success','Submitted Successfully');
    }

    public function edit_service($service)
    {
        $service =  ServicesModel::find($service);
        return view('admin/services/edit-service',compact('service'));
    }
    public function delete(ServicesModel $service){
        $service->delete();
        return back()->with('deleted','Deleted Successfully');
    }
}
