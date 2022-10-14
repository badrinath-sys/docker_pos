<?php

namespace App\Http\Controllers;

use App\Mail\OtpSendMail;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Mail;

class RegisterController extends Controller
{
    public function index()
    {
        return view('registration');
    }

    public function register(Request $request)
    {
        $model = new Admin;
        $model->username = session("username");
        $model->email = session("email");
        $model->password = Hash::make(session("password"));
        $model->otp = session('otp');
        $model->company_name = $request->company_name;
        $model->company_type = $request->company_type;

        $result = Admin::count();
        if ($result == 0) {
            $model->role = "Admin";
        } else {
            $model->role = "Staff";
        }
        $model->save();

        session()->flush();

        return redirect("/admin")->with("message", "Registration successfully completed");

    }

    public function sendotp(Request $request)
    {
        session(["email" => $request->email]);
        session(["username" => $request->username]);
        session(["password" => $request->password]);
        session(["otp" => mt_rand(10000, 99999)]);

        $data = [
            'email' => session("email"),
            'username' => session("username"),
            'password' => session("password"),
            'otp' => session("otp"),
        ];

        Mail::to($request)->send(new OtpSendMail($data));
        return view('otp')->with('message', 'Otp sent to your mail');

    }

    public function verifyOtp(Request $request)
    {
        if ($request->otp == session("otp")) {
            $request->session()->flash('message', 'Otp verified');

            return view('Customizeform');

        } else {
            $request->session()->flash('message', 'Please enter correct otp');
            return view('otp');
        }

    }
}