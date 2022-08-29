<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index()
    {

        $events = Event::where('user_id', auth()->user()->id)->get();

        if (auth()->user()->admin) {
            $events = Event::all();
        }
        $data = [

            'events' => $events
        ];

        return view('admin.events', $data);
    }

    public function add()
    {
        $data = [];
        return view('admin.event_add', $data);
    }
    public function edit($id)
    {
        $event = Event::find($id);

        $data = ['event' => $event];
        return view('admin.event_edit', $data);
    }
    public function delete($id)
    {
        if (auth()->user()->admin) {
            $event = Event::find($id);
            $event->delete();
            return redirect()->back()->with('success', 'Deleted Successfully  ');
        }
        return redirect()->back()->with('error', 'Unauthorized  ');
    }
    public function store()
    {
        $data = [];

        $image = null;
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $image =  uniqid() . "." . $file->getClientOriginalExtension();
            $file->move('uploads/events/', $image);
        }
        
        $id = DB::table('events')->insertGetId([
            'title' => request('title'),
            'details' => request('details'),
            'place' => request('place'),
            'from_time' => request('from_time'),
            'from_date' => request('from_date'),
            'to_date' => request('to_date'),
            'to_time' => request('to_time'),
            'image' => $image,
            'user_id' => request('user_id'),

        ]);

        return redirect()->back()->with('success', 'Created Successfully  ');
    }
    public function update()
    {
        $data = [];
        $id = request('id');
        $event = Event::find($id);
        $image = $event->image;
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $image = "$id." . $file->getClientOriginalExtension();
            $file->move('/uploads/events/', $image);
        }
        Event::whereId($id)->update([
            'title' => request('title'),
            'details' => request('details'),
            'place' => request('place'),
            'from_time' => request('from_time'),
            'from_date' => request('from_date'),
            'to_date' => request('to_date'),
            'to_time' => request('to_time'),
            'image' => $image
        ]);

        return redirect()->back()->with('succcess', 'Updated Successfully  ');
    }
}
