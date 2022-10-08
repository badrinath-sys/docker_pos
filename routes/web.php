<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OtpSendController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registration', function () {

    return view('OTP');

});


Route::get('admin', [AdminController::class, 'index']);
Route::post('admin/auth', [AdminController::class, 'auth'])->name('admin.auth');

Route::group(['middleware' => 'admin'], function () {

    Route::get('admin/product', [ProductController::class, 'index']);
    Route::get('admin/product/add_product', [ProductController::class, 'add_product']);
    Route::get('admin/product/{id}', [ProductController::class, 'add_product']);
    Route::post('admin/product/', [ProductController::class, 'add_product_process']);
    Route::get('admin/product/delete/{id}', [ProductController::class, 'delete']);

    Route::get('admin/pos', [PosController::class, 'index']);
    Route::get('admin/search', [PosController::class, 'search'])->name('admin.search');
    Route::post('admin/add-to-cart', [PosController::class, 'addToCart'])->name('add_to_cart');
    Route::post('admin/checkout', [PosController::class, 'checkoutOrder']);
    Route::get('admin/delete/{id}', [PosController::class, 'delete']);

    Route::get('admin/customer', [CustomerController::class, 'index']);
    Route::get('admin/customer/delete/{id}', [CustomerController::class, 'delete']);

    Route::get('admin/order', [OrderController::class, 'index']);
    Route::get('admin/order/delete/{id}', [OrderController::class, 'delete']);
    Route::get('admin/order/search', [OrderController::class, 'search'])->name('admin.order_search');

    Route::get('admin/dashboard', [DashboardController::class, 'totalSales']);

    Route::get('admin/account', [AccountController::class, 'index']);
    Route::put('admin/update/password', [AccountController::class, 'UpdatePassword']);
    Route::post('admin/otp', [OtpSendController::class, 'sendOtp']);
    Route::post('admin/verify/otp', [OtpSendController::class, 'verifyOtp']);
    Route::get('admin/resend', [OtpSendController::class, 'resend']);

    Route::get('admin/logout', function () {
        session()->forget('ADMIN_LOGIN');
        session()->forget('ADMIN_ID');
        session()->flash('success', 'Logout sucessfully');
        return redirect('admin');
    });
});