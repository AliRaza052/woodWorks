<?php

namespace App\Http\Controllers;
use \App\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
    public function adminlogin(Request $req)
    {
        $check=User::where('email',$req->email)->first();
        if($check)
        {
            if($check->password==$req->password)
            {
                session::put('userinfo','$check');
                return view('adminlogin');
            }
            else
            {return redirect()->back()->with('error','login failed');}
        }
        {return redirect()->back()->with('error','invalid id and password');}
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }

}
