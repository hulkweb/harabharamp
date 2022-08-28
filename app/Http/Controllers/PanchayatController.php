<?php

namespace App\Http\Controllers;

use App\Models\Panchayat;
use App\Models\Parliament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PanchayatController extends Controller
{
    public function index()
    {

        $panchayats = Panchayat::where('user_id', auth()->user()->id)->get();

        if (auth()->user()->admin) {
            $panchayats = Panchayat::all();
        }
        $data = [

            'panchayats' => $panchayats
        ];

        return view('admin.panchayats', $data);
    }

    public function add()
    {
        $parliaments = Parliament::all();
        $data = ['parliaments' => $parliaments];
        return view('admin.panchayat_add', $data);
    }
    public function edit()
    {
        $data = [];
        return view('admin.panchayat_add', $data);
    }

    public function store()
    {
        $data = [];
        $requests = request()->all();
        $id = Panchayat::create($requests);
        return redirect()->back()->with('success', 'Created Successfully  ');
    }
    public function update()
    {
        $data = [];
        $requests = request()->all();
        unset($requests["_token"]);
        Panchayat::whereId(request()->id)->update($requests);

        return redirect()->back()->with('success', 'Updated Successfully  ');
    }

    public function delete($id)
    {

        $member = Panchayat::find($id);
        $member->delete();
        $msg = "Deleted Successfully";
        return redirect()->back()->with('success', $msg);
    }
}
