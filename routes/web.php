<?php

use App\Http\Controllers\AdminController;
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

Route::get('admin', [AdminController::class, 'index']);
Route::post('admin/auth', [AdminController::class, 'auth'])->name('admin.auth');

Route::group(['middleware' => 'admin'], function () {

    Route::get('admin/product', [ProductController::class, 'index']);
    Route::get('admin/product/add_product', [ProductController::class, 'add_product']);
    Route::get('admin/product/{id}', [ProductController::class, 'add_product']);
    Route::put('admin/product/', [ProductController::class, 'add_product_process']);
    Route::delete('admin/product/{id}', [ProductController::class, 'delete']);

    Route::get('admin/logout', function () {
        session()->forget('ADMIN_LOGIN');
        session()->forget('ADMIN_ID');
        session()->flash('success', 'Logout sucessfully');
        return redirect('admin');
    });

});