<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index()
    {
        $positions = Position::all();
        $data = [
            'positions' => $positions
        ];

        return view('admin.positions', $data);
    }

    public function find()
    {
        $positions = [];

        $data = ['positions' => $positions];
        return view('user.position_find', $data);
    }

    public function edit($id)
    {
        $position = Position::find($id);
        if (!isset($position)) {
            $msg = "Position Does Not exist ";
            return redirect('/position/positions')->with('errore', $msg);
        }


        $data = ['position' => $position];

        return  view('admin.position_edit', $data);
    }

    public function details($id)
    {
        $position = Position::find($id);
        if (!isset($position)) {
            $msg = "Position Does Not exist ";
            return redirect('/position/positions')->with('errore', $msg);
        }
        if ($position->user_id != auth()->user()->id) {
            $msg = "Unauthorized ";
            return redirect()->back()->with('errore', $msg);
        }

        $data = ['position' => $position];
        $isAdmin = auth()->user()->admin;
        return $isAdmin ? view('admin.position_edit', $data) : view('user.position_details', $data);
    }


    public function add()
    {

        $positions = Position::all();
        $data = [
            'positions' => $positions
        ];
        $isAdmin = auth()->user()->admin;
        return  view('admin.position_add', $data);
    }



    public function store()
    {
        $position = Position::create(request()->all());

        $msg = "Created SuccessFully";
        return redirect()->back()->with("success", $msg);
    }


    public function update()
    {

        $requests = request()->all();
        unset($requests["_token"]);
        Position::whereId(request()->id)->update($requests);
        $msg = "Updated Successfully";
        return redirect()->back()->with('success', $msg);
    }


    public function delete($id)
    {
        if (auth()->user()->admin) {
            $position = Position::find($id);
            $position->delete();
            $msg = "Deleted Successfully";
            return redirect()->back()->with('success', $msg);
        }

        $msg = "Failed";
        return redirect()->back()->with('success', $msg);
    }



    public function bulkDelete()
    {
        $position = [];
        $data = [];
        $msg = "";
        return redirect()->back()->with('success', $msg);
    }
}
