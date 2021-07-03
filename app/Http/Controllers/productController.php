<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\cart;

class productController extends Controller
{
    function index(Request $req)
    {
        if (!Session()->has('user')) {
            return "Login First";
        } else {
            $data = products::all();
            return view('dashboard', ['products' => $data]);
        }
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
}
