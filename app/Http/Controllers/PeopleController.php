<?php

namespace App\Http\Controllers;


use App\Models\People;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CertificateController;
use App\Models\Position;
use Illuminate\Support\Facades\Http;

use Cloudinary\Cloudinary;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary as FacadesCloudinary;
use mysqli;

class PeopleController extends Controller
{
    public function index()
    {
        $db = 'u934617904_mpbjym';
        $host = 'sql665.main-hosting.eu';
        $username = 'u934617904_mpbjym';
        $password = 'Host#098';

        // $con = mysqli_connect($host, $username, $password, $db) or die('disconnected');
        // if ($con) {
            // echo "connected";
            // $query = mysqli_query($con, "SELECT * FROM positions");
            // while ($user = mysqli_fetch_assoc($query)) {
            //     Position::create($user);
            // var_dump($user);
            // }
        // }

        $peoples = request()->has('event') ? People::where("event_id", request('event'))->get() : People::all();

        $data = [
            'peoples' => $peoples
        ];

        return view('admin.peoples', $data);
    }

    public function find()
    {
        $peoples = [];

        $data = ['peoples' => $peoples];
        return view('user.people_find', $data);
    }

    public function search()
    {
        $from_lat_lang = request('from_lat_lang');
        $to_lat_lang = request('to_lat_lang');
        $from_loc = request('from_loc');
        $to_loc = request('to_loc');
        $date_of_departure = request('date_of_departure');

        $peoples = User::where('from_loc', $from_loc)->where('to_loc', $to_loc)->where('date_of_departure', $date_of_departure)->get();
        $data = ['peoples' => $peoples];
        return view('user.people_result', $data);
    }

    public function result()
    {


        $peoples = [];
        $data = ['peoples' => $peoples];
        return view('user.people_result', $data);
    }
    public function filter()
    {
        $event = request('event');
        $to_lat_lang = request('to_lat_lang');
        $from_loc = request('from_loc');
        $to_loc = request('to_loc');
        $date_of_departure = request('date_of_departure');

        $peoples = DB::table('peoples')->where('from_loc', $from_loc)->where('to_loc', $to_loc)->where('date_of_departure', $date_of_departure)->get();
        $data = ['peoples' => $peoples];
        return view('user.people_result', $data);
    }


    public function edit($id)
    {
        $people = User::find($id);
        if (!isset($people)) {
            $msg = "User Does Not exist ";
            return redirect('/people/peoples')->with('errore', $msg);
        }


        $data = ['people' => $people];

        return  view('admin.people_edit', $data);
    }

    public function details($id)
    {
        $people = User::find($id);
        if (!isset($people)) {
            $msg = "User Does Not exist ";
            return redirect('/people/peoples')->with('errore', $msg);
        }
        if ($people->user_id != auth()->user()->id) {
            $msg = "Unauthorized ";
            return redirect()->back()->with('errore', $msg);
        }

        $data = ['people' => $people];
        $isAdmin = auth()->user()->admin;
        return $isAdmin ? view('admin.people_edit', $data) : view('user.people_details', $data);
    }


    public function add()
    {

        $data = [];
        $isAdmin = auth()->user()->admin;
        return  view('admin.people_add', $data);
    }



    public function store()
    {
        $certificate_image = "certificate.jpg";
        $image = null;
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $image = request('name') . uniqid() . "." . $file->getClientOriginalExtension();
            $file->move('uploads/avatars/', $image);
        }
        if (People::where("phone", request('phone'))->count()) {
            // $user = People::where("phone", request('phone'))->get()[0];
            // $certificate = new CertificateController();
            // $path = $certificate->create_certificate($user, $user->place, $certificate_image);
            //   $message = "Thanks for participating in हरा भरा मध्यप्रदेश Event";   
            // $this->send_on_whatsapp($path, $user->phone, $message);
        
            return redirect()->back()->with('success', 'Already Registered ');
        }
        $id = DB::table('peoples')->insertGetId([

            'name' => request('name'),
            'event_id' => request('event_id'),
            'place' => request('place'),
            'phone' => request('phone'),
            'geoloc' => request('geoloc'),
            'email' => request('email'),
            'avatar' => $image,
            'birthday' => date('y-m-d', strtotime(request('birthday'))),
            'pincode' => request('pincode')
        ]);
        $certificate_image = "certificate.jpg";
        $user = People::find($id);
        $certificate = new CertificateController();
        $path = $certificate->create_certificate($user, $user->place, $certificate_image);
     $message = "Thanks for participating in हरा भरा मध्यप्रदेश Event";   
            $this->send_on_whatsapp($path, $user->phone, $message);
        
        
        // return response()->download($path, 'filename.png', $headers);
        return redirect(route('home'))->with('success', "$path");
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

        $people = People::find($id);
        $people->delete();
        $msg = "Deleted Successfully";
        return redirect()->back()->with('success', $msg);
    }

    protected function send_on_whatsapp($image_url, $phone, $message)
    {
        $instance_id = DB::table('settings')->where('property', 'instance_id')->get()[0]->value;
        $token = DB::table('settings')->where('property', 'token')->get()[0]->value;
        $caption_message = $message;
        $caption_image = "Chavinirman.png";
        $caption_image_url = $image_url;


        $url_whatsapp = "https://ziper.io/api/send.php?number=91$phone&type=media&message=$caption_message&media_url=$caption_image_url&filename=$caption_image&instance_id=$instance_id&access_token=$token";
        $response = Http::get($url_whatsapp);
        echo $response;
    }

    public function bulkDelete()
    {
        $people = [];
        $data = [];
        $msg = "";
        return redirect()->back()->with('success', $msg);
    }
}
