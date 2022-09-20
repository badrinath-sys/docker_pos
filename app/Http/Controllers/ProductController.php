<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $role = Session::get('role');
        if ($role == 'Admin') {
            $result['data'] = Product::all();
            return view('admin/product', $result);
        } else {
            return redirect('admin/dashboard');
        }
    }

    public function add_product(Request $request, $id = '')
    {
        if ($id > 0) {
            $arr = Product::where(['id' => $id])->get();

            $result['product_name'] = $arr['0']->product_name;
            $result['image'] = $arr['0']->image;
            $result['barcode'] = $arr['0']->barcode;
            $result['price'] = $arr['0']->price;
            $result['quantity'] = $arr['0']->quantity;
            $result['id'] = $arr['0']->id;
        } else {
            $result['product_name'] = '';
            $result['image'] = '';
            $result['barcode'] = '';
            $result['price'] = '';
            $result['quantity'] = '';
            $result['id'] = 0;
        }
        return view('admin/add_product', $result);
    }

    public function add_product_process(Request $request)
    {

        $request->validate([
            'product_name' => 'required',
            'barcode' => 'required|numeric',
            'price' => 'required|numeric',
            'quantiy' => 'required' . $request->post('id'),
        ]);

        if ($request->post('id') > 0) {
            $model = Product::find($request->post('id'));
            $msg = "Product updated";
        } else {
            $model = new Product();
            $msg = "Product inserted";
        }
        if ($request->hasfile('image')) {
            if ($request->post('id') > 0) {
                $arrImage = DB::table('products')->where(['id' => $request->post('id')])->get();
                if (Storage::exists('/public/media/' . $arrImage[0]->image)) {
                    Storage::delete('/public/media/' . $arrImage[0]->image);
                }
            }
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media', $image_name);
            $model->image = $image_name;
        }

        $model->product_name = $request->post('product_name');
        $model->barcode = $request->post('barcode');
        $model->price = $request->post('price');
        $model->quantity = $request->post('quantity');

        if ($model['quantity'] == 0) {
            $model->status = 0;
        } else {
            $model->status = 1;
        }
        $model->save();
        $request->session()->flash('message', $msg);
        return redirect('admin/product');
    }

    public function delete(Request $request, $id)
    {
        $model = Product::find($id);
        $model->delete();
        $request->session()->flash('message', 'product deleted');
        return redirect('admin/product');
    }

}