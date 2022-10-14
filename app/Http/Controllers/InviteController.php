<?php

namespace App\Http\Controllers;

use App\Mail\InvitationSendMail;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mail;

class InviteController extends Controller
{
    public function index()
    {
        return view('admin/invite');
    }

    public function sendInvitation(Request $request)
    {
        $verification_code = Str::random(12);

        $model = new Staff;
        $model->verification_id = $verification_code;
        $model->email = $request->email;
        $model->save();
        $data = [
            'verification_id' => $verification_code,
        ];

        Mail::to($request->email)->send(new InvitationSendMail($data));
        return redirect('admin/invite')->with("message", "Invitation sent");

    }
    public function verify(Request $request, $id)
    {
        $id = $request->id;
        $result = Staff::where(['verification_id' => $id])->first();
        if ($result['verification_id'] == $id) {
            return redirect('/registration');

        }
    }
}