<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Panchayat;
use App\Models\People;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function profile()
    {
        return view('admin.profile');
    }
   
    public function signup()
    {
        $name = request('name');
        $email = request('email');
        $password = request('password');
        if (User::where('email', $email)->count() == 0) {

            $user_id = DB::table('users')->insertGetId([
                'name' => $name,
                'email' => $email,
                'password' => $password
            ]);
            // auth()->signin(User::find($user_id));
            $message = "Please verify your email by clicking below link";

            $this->mail_to($email, $message);
            return redirect(route('login'))->with('success', 'Registered Successfully ');
        } else {
            return redirect(route('signup'))->with('errore', 'Email Already Exist ');
        }
    }
    public function login_get()
    {
        return view('admin.login');
    }
    public function login()
    {
        $phone = request('phone');
        $password = request('password');
        $count = User::where('phone', $phone)->where('password', $password)->count();
        if ($count) {
            $user = User::where('phone', $phone)->get()[0];
            Auth::login($user);

            return redirect(route('admin_dashboard'))->with('success', 'Logged In');
        } else {
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
    }

    public function index()
    {
        $peoples = People::count();
        $events = Event::count();
        $members = User::where("member", true)->count();
        $voluntiers = User::where("voluntier", true)->count();
        $panchayats = Panchayat::all();

        $data = [
            'peoples' => $peoples,
            'members' => $members,
            'voluntiers' => $voluntiers,
            'panchayats' => $panchayats,
            'events' => $events
        ];

        return view('admin.index', $data);
    }
    public function logout()
    {
        auth()->logout();
        return redirect(route('home'));
    }
}
