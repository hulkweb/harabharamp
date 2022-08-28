<?php

namespace App\Http\Controllers;

use App\Models\Parliament;
use Illuminate\Http\Request;

class ParliamentController extends Controller
{
    public function index()
    {     

        
        $parliaments = Parliament::all();
        $data = [
            'parliaments' => $parliaments
        ];

        return view('admin.parliaments', $data);
    }

    public function find()
    {
        $parliaments = [];

        $data = ['parliaments' => $parliaments];
        return view('user.parliament_find', $data);
    }




    public function edit($id)
    {
        $parliament = Parliament::find($id);
        if (!isset($parliament)) {
            $msg = "Parliament Does Not exist ";
            return redirect('/parliament/parliaments')->with('errore', $msg);
        }


        $data = ['parliament' => $parliament];

        return  view('admin.parliament_edit', $data);
    }

    public function details($id)
    {
        $parliament = Parliament::find($id);
        if (!isset($parliament)) {
            $msg = "Parliament Does Not exist ";
            return redirect('/parliament/parliaments')->with('errore', $msg);
        }
        if ($parliament->user_id != auth()->user()->id) {
            $msg = "Unauthorized ";
            return redirect()->back()->with('errore', $msg);
        }

        $data = ['parliament' => $parliament];
        $isAdmin = auth()->user()->admin;
        return $isAdmin ? view('admin.parliament_edit', $data) : view('user.parliament_details', $data);
    }


    public function add()
    {

        $parliaments = Parliament::all();
        $data = [
            'parliaments' => $parliaments
        ];
        $isAdmin = auth()->user()->admin;
        return  view('admin.parliament_add', $data);
    }



    public function store()
    {
        $parliament = Parliament::create(request()->all());

        $msg = "Created SuccessFully";
        return redirect()->back()->with("success", $msg);
    }


    public function update()
    {

        $requests = request()->all();
        unset($requests["_token"]);
        Parliament::whereId(request()->id)->update($requests);
        $msg = "Updated Successfully";
        return redirect()->back()->with('success', $msg);
    }


    public function delete($id)
    {
        if (auth()->user()->admin) {
            $parliament = Parliament::find($id);
            $parliament->delete();
            $msg = "Deleted Successfully";
            return redirect()->back()->with('success', $msg);
        }

        $msg = "Failed";
        return redirect()->back()->with('success', $msg);
    }



    public function bulkDelete()
    {
        $parliament = [];
        $data = [];
        $msg = "";
        return redirect()->back()->with('success', $msg);
    }
}
