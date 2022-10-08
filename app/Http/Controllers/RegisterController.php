<?php

namespace App\Http\Controllers;

use App\Mail\OtpSendMail;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Mail;

class RegisterController extends Controller
{
    public function index()
    {
        return view('registration');
    }

    public function register(Request $request)
    {
        session(["email" => $request->email]);

        $model = new Admin;
        $model->username = $request->username;
        $model->email = $request->email;
        if ($model->email) {
            $data = [
                'email' => $request->email,
                'otp' => session(mt_rand(10000, 99999)),
            ];
            Mail::to($request->email)->send(new OtpSendMail($data));

        }
        $model->otp = 12345;
        $model->role = "staff";
        return redirect()->back();

        $model->password = Hash::make($request->get('password'));
        $model->save();

    }

    public function sendotp()
    {
        $data = [
            'email' => session("email"),
            'otp' => session(mt_rand(10000, 99999)),
        ];

        Mail::to(session("email"))->send(new OtpSendMail($data));
        return Redirect::to('registration', '#step2');

    }

    public function verifyOtp(Request $request)
    {

        if ($request->otp = session("otp")) {
            return redirect()->to(app('url')->previous() . "#form1");

        } else {
            return redirect()->back()->with('message1', 'Please enter correct otp');
        }

    }
}