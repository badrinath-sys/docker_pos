<?php

namespace App\Http\Controllers;

use App\Mail\OtpSendMail;
use App\Models\Admin;
use Illuminate\Http\Request;
use Mail;

class OtpSendController extends Controller
{
    public function sendOtp(Request $request)
    {
        session(["email" => $request->email]);

        $data = [
            'email' => session("email"),
            'otp' => mt_rand(10000, 99999),
        ];

        $request->validate([
            'email' => 'required|email',
        ]);

        $id = session()->get('ADMIN_ID');
        $result = Admin::where(['id' => $id])->first();
        $result->otp = $data['otp'];
        $result->save();

        Mail::to(session("email"))->send(new OtpSendMail($data));
        return redirect()->back()->with('code', 1);

    }

    public function verifyOtp(Request $request)
    {
        $result = Admin::where("otp", "=", $request->otp)->first();
        if ($result) {
            $result['email'] = session("email");
            $result->save();
            return redirect()->back()->with('message1', 'Email updated successfully');

        } else {
            return redirect()->back()->with('message1', 'Please enter correct otp');
        }

    }

    public function resend()
    {
        $data = [
            'email' => session("email"),
            'otp' => mt_rand(10000, 99999),
        ];

        $id = session()->get('ADMIN_ID');
        $result = Admin::where(['id' => $id])->first();
        $result->otp = $data['otp'];
        $result->save();

        Mail::to(session("email"))->send(new OtpSendMail($data));
        return redirect()->back()->with('code', 1);

    }
}