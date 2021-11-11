<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    function signin(Request $req){
        $user = new Admin();
        $eml = $req->Email;
        $pass = $req->Password;
        $data = DB::table('admins')
            ->where('email', '=', $eml)
            ->where('password', $req->Password)
            ->count();
        if ($data == 1) {
            $current_user = Admin::where('Email', $eml)->first();
            $req->session()->put('Admin', $current_user->email);
            $req->session()->put('id', $current_user->id);
            session()->put('login', 1);
            return view('Admin.dashboard')->with('logedin', $data);
        } else {
            return redirect('admin-portal');
        }
    }

    function Logoutadmin()
    {
        if (session()->has('Admin')) {
            session()->flush();
            session()->regenerateToken();
        }
        return view('Admin.login');
    }
}
