<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $result['data'] = Customer::all();
        return view('admin/customer', $result);
    }

    public function delete(Request $request, $id)
    {
        $model = Customer::find($id);
        $model->delete();
        $request->session()->flash('message', 'customer deleted');
        return redirect('admin/customer');
    }

}