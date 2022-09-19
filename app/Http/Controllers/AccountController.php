<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    public function index()
    {
        $id = session()->get('ADMIN_ID');
        $result['data'] = Admin::where(['id' => $id])->first();
        return view('admin/account', $result);
    }

    public function UpdatePassword(Request $request)
    {
        $id = session()->get('ADMIN_ID');

        $result = Admin::where(['id' => $id])->first();

        if ($result) {
            if (Hash::check($request->old_password, $result->password)) {

                if (strcmp($request->old_password, $request->new_password) == false) {

                    $request->session()->flash('message', 'New password cannot be same as your previous password');
                    return redirect('admin/account');

                } else {
                    $result['password'] = Hash::make($request->new_password);
                    $result->save();
                    $request->session()->flash('message', 'password updated successfully');
                    return redirect('admin/account');
                }

            }
            $request->session()->flash('message', "invalid credentials");
            return redirect('admin/account');
        }

    }
}