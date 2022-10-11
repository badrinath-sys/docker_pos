<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->session()->has('ADMIN_LOGIN')) {
            $role = session()->get('role');
            if ($role == 1) {
                return redirect('admin/dashboard');
            } else {
                return redirect('admin/dashboard');

            }

        } else {
            return view('admin.login');
        }
        return view('admin.login');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:6',
        ]);

        $email = $request->post('email');
        $password = $request->post('password');
        $result = Admin::where(['email' => $email])->first();
        if ($result) {
            if (Hash::check($password, $result->password)) {
                if ($result->role == 'Admin') {
                    $request->session()->put('ADMIN_LOGIN', true);
                    $request->session()->put('ADMIN_ID', $result->id);
                    $request->session()->put('role', 'Admin');

                    return redirect('admin/dashboard')->with('message3', 'Your are Admin');
                } else {
                    $request->session()->put('ADMIN_LOGIN', true);
                    $request->session()->put('ADMIN_ID', $result->id);
                    $request->session()->put('role', 'Staff');

                    return redirect('admin/dashboard')->with('message3', 'You are Staff');
                }

            } else {
                $request->session()->flash('error', 'Please enter correct password');
                return redirect('admin');
            }
        } else {
            $request->session()->flash('error', 'Please enter valid login details');
            return redirect('admin');
        }
    }

}
