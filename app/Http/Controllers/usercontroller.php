<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Error;
use Illuminate\Support\Facades\Hash;
use Throwable;

class usercontroller extends Controller
{
    function login(Request $req)
    {
        if ($user =  User::where(['email' => $req->email])->first()) {
            // $user =  User::where(['email' => $req->email])->first();
            if (Hash::check($req->password, $user->password)) {
                $req->session()->put('user', $user);
                return redirect('dashboard');
            } else {
                return redirect('login');
            }
        } else {
            return "Email ID Wrong";
        }
    }
    function logout(Request $req)
    {
        if (Session()->has('user')) {
            Session()->forget('user');
            return redirect('login');
        } else {
            return redirect('login');
        }
    }
    function register(Request $req)
    {
        // return $req->input();
        try {
            $user = new User();
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = Hash::make($req->password);
            $user->save();
            return redirect('/login');
        } catch (Throwable $e) {
            echo '<script>alert("Can not create account");</script>';
            // function_alert("");
            // return redirect('');
        }
    }
}
