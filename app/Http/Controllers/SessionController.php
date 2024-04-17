<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    //

    function index(){
        if(Auth::check()){
            return redirect('/admin/dashboard-admin');
        }else{
            return view('login');
        }
    }
    function login(Request $request){
        Session::flash('username',$request->username);
        $request->validate([
        'username'=>'required',
        'password'=>'required'

        ],[
            'username.required'=>'Username Wajib Diisi',
            'password.required'=>'Password wajib diisi'
        ]);

    $infologin = [
        'username'=> $request->username,
        'password'=> $request->password
    ];

    if(Auth::attempt($infologin)){
        return redirect('/admin/dashboard-admin')->with('success','Berhasil masuk');
    } else{
        return redirect('/login')->withErrors('Username dan password yang dimasukkan tidak valid');
    }
    }


    function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
