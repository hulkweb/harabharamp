<?php

namespace App\Http\Controllers;

use App\Models\Panchayat;
use App\Models\Parliament;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoluntierController extends Controller
{
    public function index()
    {
        $voluntiers = User::where("voluntier", true)->where("added_by", auth()->user()->id)->get();
        if (auth()->user()->admin) {
            $voluntiers = User::where("voluntier", true)->where('panchayat_id', '!=', null)->get();
        }
        $data = [
            'voluntiers' => $voluntiers
        ];

        return view('admin.voluntiers', $data);
    }

    public function find()
    {
        $voluntiers = [];

        $data = ['voluntiers' => $voluntiers];
        return view('user.voluntier_find', $data);
    }




    public function edit($id)
    {
        $voluntier = User::find($id);
        if (!isset($voluntier)) {
            $msg = "User Does Not exist ";
            return redirect('/voluntier/voluntiers')->with('errore', $msg);
        }


        $data = ['voluntier' => $voluntier];

        return  view('admin.voluntier_edit', $data);
    }

    public function details($id)
    {
        $voluntier = User::find($id);
        if (!isset($voluntier)) {
            $msg = "User Does Not exist ";
            return redirect('/voluntier/voluntiers')->with('errore', $msg);
        }
        if ($voluntier->user_id != auth()->user()->id) {
            $msg = "Unauthorized ";
            return redirect()->back()->with('errore', $msg);
        }

        $data = ['voluntier' => $voluntier];
        $isAdmin = auth()->user()->admin;
        return $isAdmin ? view('admin.voluntier_edit', $data) : view('user.voluntier_details', $data);
    }


    public function add()
    {
        $panchayats = Panchayat::all();

        $data = [
            'panchayats' => $panchayats
        ];
        $isAdmin = auth()->user()->admin;
        return  view('admin.voluntier_add', $data);
    }



    public function store()
    {
        $image = null;
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $image = request('phone') . uniqid() . "." . $file->getClientOriginalExtension();
            $file->move('uploads/avatars/', $image);
        }
        if (DB::table('users')->where('phone', request('phone'))->count() == 0) {
            try {
                $id = DB::table('users')->insertGetId([
                    'voluntier' => true,
                    'phone' => request('phone'),
                    'name' => request('name'),
                    'added_by' => request('added_by'),
                    'panchayat_id' => request('panchayat_id'),
                    'email' => request('email'),
                    'avatar' => $image,

                ]);
            } catch (Exception $e) {
                //throw $th;
                $e = json_encode($e);
                return redirect()->back()->with('errore', "Enter Diffrent Email ");
            } finally {
                return redirect()->back()->with('success', 'Created Successfully  ');
            }
        }

        return redirect()->back()->with('errore', ' Enter Diffrent MObile  ');
    }


    public function update()
    {

        $requests = request()->all();
        unset($requests["_token"]);
        User::whereId(request()->id)->update($requests);
        $msg = "Updated Successfully";
        return redirect()->back()->with('success', $msg);
    }


    public function delete($id)
    {

        $voluntier = User::find($id);
        $voluntier->delete();
        $msg = "Deleted Successfully";
        return redirect()->back()->with('success', $msg);
    }



    public function bulkDelete()
    {
        $voluntier = [];
        $data = [];
        $msg = "";
        return redirect()->back()->with('success', $msg);
    }
}
