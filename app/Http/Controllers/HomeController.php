<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    public function otp()
    {
        $mobile = $_POST['mobile'];
        $otp = $_POST['otp'];

        // if (!isset($_COOKIE['bjotsTx'])) {
        //     setcookie("bjotsTx", time() + 24 * 60 * 60 * 60);
        // } else {
        //     echo "after";
        //     exit();
        // }
      $res=  Http::get("http://182.18.162.128/api/mt/SendSMS?user=BJPYUVAMORCHA&password=123456&senderid=Bjymvp&channel=Trans&DCS=0&flashsms=0&number=91$mobile&text=Your OTP for MPBJYM is $otp&route=08");

        // $fields = array(
        //     "sender_id" => "MPBJYM",
        //     "message" => "Your OTP for BJYM is $otp ",
        //     "route" => "v3",
        //     "numbers" => $mobile
        // );

        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => "",
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 30,
        //     CURLOPT_SSL_VERIFYHOST => 0,
        //     CURLOPT_SSL_VERIFYPEER => 0,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => "POST",
        //     CURLOPT_POSTFIELDS => json_encode($fields),
        //     CURLOPT_HTTPHEADER => array(
        //         "authorization: uBJzyBor3m6Ndbh4PozFKst61UHIvlKi7D8NRmWUJ5H53Z1bw90e9wLwffv9",
        //         "accept: */*",
        //         "cache-control: no-cache",
        //         "content-type: application/json"
        //     ),
        // ));

        // $response = curl_exec($curl);
        // $err = curl_error($curl);

        // curl_close($curl);
        return 'success';
    }
}
