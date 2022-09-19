<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $result['data'] = Order::all();
        return view('admin/orders', $result);
    }
    public function delete(Request $request, $id)
    {
        $model = Order::find($id);
        $model->delete();
        $request->session()->flash('message', 'order deleted');
        return redirect('admin/order');
    }

    public function search(Request $request)
    {
        $result = Order::all();
        $search = $request->input('search');
        $order = Order::query()->where('name', 'LIKE', "%{$search}%")->get();

        return view('admin/orders', ['item' => $order, 'data' => $result]);
    }
}