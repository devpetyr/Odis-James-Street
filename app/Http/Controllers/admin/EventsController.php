<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\EventsModel;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function event_list()
    {
        $events =  EventsModel::orderBy('id','asc')->get();
        return view('admin/events/events-list',compact('events'));
    }
    public function add_event()
    {
        return view('admin/events/add-events');
    }
    public function add_edit_event(Request $request, EventsModel $events)
    {
        $create =1;
        $create = (isset($events->id)&&$events->id>0)?$create=0:$create=1;
        if($request->hasFile('image'))
        {
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads/events'), $imageName);
            $events->image = $imageName;
        }
        $events->name = $request->name;
        $events->event_date = $request->date;
        $events->event_time = $request->time;
        $events->longitude_latitude = $request->longitude_latitude;
        $events->price = $request->price;
        $events->description = $request->description;
        $events->address = $request->address;
        $events->status = $request->status;
        $events->save();
        if($create === 0){
            return back()->with('Updated','Updated Successfully');
        }else{
            return back()->with('Added','Added Successfully');
        }
    }

    public function edit_event($events)
    {
        $event =  EventsModel::find($events);
        return view('admin/events/edit-events',compact('event'));
    }
    public function delete(EventsModel $events){
        $events->delete();
        return back()->with('deleted','Deleted Successfully');
    }
}
