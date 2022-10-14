<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Customer;
use App\Models\Feedback;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PosController extends Controller
{
    public function index()
    {
        $result['products'] = Product::all();

        return view('admin/pos', $result);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $result['item'] = Product::query()->where('product_name', 'LIKE', "%{$search}%")->orWhere('barcode', 'LIKE', "%{$search}%")->get();

        return view('admin/pos', $result);
    }

    public function addToCart(Request $request)
    {
        $id = $request->barcode;
        $product = Product::where("barcode", "=", $id)->first();
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "id" => $product->id,
                "barcode" => $product->barcode,
                "name" => $product->product_name,
                "price" => $product->price,
                "image" => $product->image,
                "quantity" => 1,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }

    public function delete(Request $request, $id)
    {
        $cart = session()->get('cart');
        foreach ($cart as $key => $item) {
            if ($id == $item['id']) {
                unset($cart[$key]);
                break;
            }
        }
        session()->put('cart', $cart);
        return redirect('admin/pos');
    }

    public function checkoutOrder(Request $request)
    {
        $order_id = mt_rand(10000, 99999);

        $model = new Customer;
        $model->name = $request->name;
        $model->mobile = $request->mobile;
        $model->save();

        $model = new Order;
        $model->name = $request->name;
        $model->amount = filter_var(str_replace(",", "", $request->amount), FILTER_SANITIZE_NUMBER_INT);
        $model->order_id = $order_id;
        $model->payment_type = $request->payment_type;
        $model->status = "completed";
        $model->save();

        $id = session()->get('ADMIN_ID');
        $result = Admin::where(['id' => $id])->first();

        $model = new Feedback;
        $model->staff_name = $result['username'];
        $model->order_id = $order_id;
        $model->feedback = $request->feedback;
        $model->save();

        $request->session()->forget('cart');

        $request->session()->flash('message', 'Order successfully completed');
        return redirect('admin/pos');
    }
}