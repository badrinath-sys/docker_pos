<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function totalSales()
    {
        $orders = DB::table('orders')->count();
        $users = DB::table('customers')->count();
        $products = DB::table('products')->count();

        $income = DB::table('orders')
            ->selectRaw('sum(amount)')
            ->whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->get();

        $result = filter_var(str_replace(",", "", $income), FILTER_SANITIZE_NUMBER_INT);

        return view('admin.dashboard', ['sales' => $orders, 'users' => $users, 'income' => $result, 'products' => $products]);
    }
}