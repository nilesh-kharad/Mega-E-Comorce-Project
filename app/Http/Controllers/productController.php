<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\products;
use App\Models\cart;
use App\Models\order;
use Illuminate\Contracts\Session\Session as SessionSession;
use session;

class productController extends Controller
{
    function index(Request $req)
    {

        $data = products::all();
        return view('/dashboard', ['products' => $data]);
    }

    function detail($id)
    {
        $data = products::find($id);
        return view('detail', ['products' => $data]);
    }
    function search(Request $req)
    {

        // return $req->input();
        $data = products::where('name', 'like', '%' . $req->input('name') . '%')->get();
        return view('search', ['products' => $data]);
    }
    function add_to_cart(Request $req)
    {
        if (!Session()->has('user')) {
            return redirect('login');
        } else {
            $cart = new cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('dashboard');
        }
    }
    static function cartItem()
    {
        $userId = session()->get('user')['id'];
        return cart::where('user_id', $userId)->count();
    }
    function cartList()
    {
        $userId = session()->get('user')['id'];
        $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->select('products.*', 'cart.id as cart_id')
            ->get();
        return view('cartlist', ['products' => $products]);
    }
    function removeCart($id)
    {
        cart::destroy($id);
        return redirect('cartList');
    }
    function orderNow()
    {
        $userId = session()->get('user')['id'];
        $total  = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', '=', $userId)
            ->sum('products.price');
        return view('ordernow', ['total' => $total]);
    }
    function orderPlace(Request $req)
    {
        $userId = session()->get('user')['id'];
        $allcart = cart::where('user_id', $userId)->get();
        foreach ($allcart as $cart) {
            $order = new order();
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->save();
        }
        return redirect('dashboard');
    }
    function myOrders()
    {
        $userId = session()->get('user')['id'];
        $orders = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', '=', $userId)
            ->get();
        return view('myorders', ['orders' => $orders]);
    }
}
