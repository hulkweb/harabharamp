<?php

namespace App\Http\Controllers;

use App\Models\Assembly;
use App\Models\District;
use App\Models\Event;
use App\Models\Mandal;

use App\Models\Panchayat;
use App\Models\Parliament;
use App\Models\Position;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index()
    {
        $members = User::where("member", true)->get();
        $data = [
            'members' => $members
        ];

        return view('admin.members', $data);
    }

    public function register()
    {
        $positions = Position::all();
        $parliaments = Parliament::all();
       $districts = District::all();
        $data = ['positions' => $positions, 'parliaments' => $parliaments, 'districts' => $districts];
        $authorize = Setting::where('property', 'authorize')->get()[0]->value;
        if (request()->has('authorize') && (request('authorize') == $authorize)) {
            return view('admin.member_registration', $data);
        } else {
            $msg = "UnAuthorized";
            if (!request()->has('event')) {
                return redirect(route('home'))->with('errore', $msg);
            }
            $id = request('event');
            $event = Event::find($id);
            if ($event) {
                $data['event'] = $event;
                return view('admin.people_register', $data);
            } else {
                return redirect(route('home'))->with('success', $msg);
            }
        }
    }
  public function get_assembly()
    {
        $district_id = request('district');
        $assemblies = Assembly::where('district_id', $district_id)->get();
        return $assemblies;
    }

    public function get_mandal()
    {
        $assembly_id = request('assembly');
        $mandals = Mandal::where('assembly_id', $assembly_id)->get();
        return $mandals;
    }
    public function edit($id)
    {
        $member = User::find($id);
        if (!isset($member)) {
            $msg = "User Does Not exist ";
            return redirect('/member/members')->with('errore', $msg);
        }
        $positions = Position::all();

        $data = ['member' => $member, 'positions' => $positions];

        return  view('admin.member_edit', $data);
    }

    public function details($id)
    {
        $member = User::find($id);
        if (!isset($member)) {
            $msg = "User Does Not exist ";
            return redirect('/member/members')->with('errore', $msg);
        }
        if ($member->user_id != auth()->user()->id) {
            $msg = "Unauthorized ";
            return redirect()->back()->with('errore', $msg);
        }

        $data = ['member' => $member];
        $isAdmin = auth()->user()->admin;
        return $isAdmin ? view('admin.member_edit', $data) : view('user.member_details', $data);
    }


    public function add()
    {

        $data = ['positions' => Position::all()];
        $isAdmin = auth()->user()->admin;
        $authorize = Setting::where('property', 'authorize')->get()[0]->value;
        return redirect("/register?authorize=$authorize");
        return  view('admin.member_add', $data);
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

             $id = DB::table('users')->insertGetId([
               'member' => true,
                'name' => request('name'),
                'place' => request('place'),
                'phone' => request('phone'),
                'whatsapp' => request('whatsapp'),
                'position_id' => 1,
                'parliament' => Assembly::find(intval(request('parliament')))->assembly,
                'district' =>  District::find(intval(request('district')))->name,
                'mandal' => Mandal::find(intval(request('mandal')))->mandal,
                'pincode' => 00001
            ]);
            Auth::login(User::find($id));
        }
        
        if(auth()->user()){
            return redirect(route('panchayat_samiti'))->with('success', 'Created Successfully  ');
        }else{
           return redirect(route('member_login'))->with('success', 'Created Successfully  '); 
        }
        
    }
    
    
public function login()
    {

        $xls = 'dynemo.csv';
        // if (($open = fopen($xls, "r")) !== FALSE) {

        //     while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
        //         $array[] = $data;
        // $distict = $data[0];
        // echo $data[0];
        // if (DB::table('districts')->where('name', $distict)->count() == 0) {
        //     District::create(['name' => $distict]);
        // }
        //     }

        //     fclose($open);
        // }
        // echo "<pre>";

        // var_dump($array);
        // echo "</pre>";
        // foreach ($array as $index => $col) {
        //     if ($index != 0) {
        //         $distict = $col[0];
        // if (DB::table('districts')->where('name', $distict)->count() == 0) {
        //     District::create(['name' => $distict]);
        // }
        // }

        // foreach($col as $field){
        //   echo $col[0]."<br>";
        // }

        // }

        return view('login');
    }
    public function login_post()
    {
        $phone = request('phone');

        $count = User::where('phone', $phone)->where('member',true)->count();
        if ($count) {
            $user = User::where('phone', $phone)->get()[0];
            Auth::login($user);
            return redirect(route('panchayat_samiti'))->with('success', 'Logged In');
        } else {
            return redirect()->back()->with('errore', 'Invalid Credentials');
        }
    }
    
public function panchayat_samiti()
    {
        //     $phone = request('phone');

        //     $count = User::where('phone', $phone)->count();
        //     if ($count) {
        //         $user = User::where('phone', $phone)->get()[0];
        //         Auth::login($user);
        //         return redirect(route('admin_dashboard'))->with('success', 'Logged In');
        //     } else {
        //         return redirect()->back()->with('errore', 'Invalid Credentials');
        //     }

        // $parliaments = Assembly::all();
      if (auth()->user()) {
            $panchayats = Panchayat::where('user_id', auth()->user()->id)->get();
            return view('admin.panchayat_samiti', ['panchayats' => $panchayats]);
        } else {
            return redirect(route('member_login'));
        }
    }

 public function panchayat_samiti_edit($id)
    {
        $panchayat = Panchayat::find($id);
        if($panchayat){
             $voluntiers = User::where('voluntier', true)->where("panchayat_id",$id)->get();
        return view('admin.panchayat_samiti_edit', ['panchayat' => $panchayat, 'voluntiers' => $voluntiers]);
        }
       else{
             $panchayats = Panchayat::where('user_id', auth()->user()->id)->get();
            return view('admin.panchayat_samiti', ['panchayats' => $panchayats]);
       }
    }

    public function panchayat_samiti_post()
    {
          $user_id = request('user_id');
          $place = request('place');
        $user = User::find($user_id);
        if ($user) {
            $panchayat = request('name');
            $panchayat_id = DB::table('panchayats')->insertGetId([
                'name' => $panchayat,
                'district' => $user->district,
                'parliament' => $user->parliament,
                'mandal' => $user->mandal,
                'user_id'=>$user_id

            ]);

            
            for ($i = 1; $i < 11; $i++) {

                $name = request("name_$i");
                $phone = request("phone_$i");
                $voluntier_lead = 0;
                if ($i == 1) {
                    $voluntier_lead = true;
                }
                if (strlen(strval($phone)) >= 10) {
                    User::create([
                        'phone' => $phone,
                        'place' => $place,
                        'name' => $name,
                        'added_by' => $user_id,
                        'voluntier' => true,
                        'voluntier_lead' => $voluntier_lead,
                        'district' => $user->district,
                        'parliament' => $user->parliament,
                        'mandal' => $user->mandal,
                        'panchayat_id' => $panchayat_id,
                    ]);
                }
            }
            return redirect(route('panchayat_samiti'))->with('success', 'पंचायत समिति सफलतापुर्वक गठित !');


            
        }

         return redirect(route('member_login'));
        
        
        
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

        $member = User::find($id);
        $member->delete();
        $msg = "Deleted Successfully";
        return redirect()->back()->with('success', $msg);
    }



    public function bulkDelete()
    {
        $member = [];
        $data = [];
        $msg = "";
        return redirect()->back()->with('success', $msg);
    }
}
