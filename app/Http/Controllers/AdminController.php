<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   /*  public function index(){
        $admin = Admin::all();
        return view('userAdmin.index',compact(['admin']));
    }

    public function create(){
        return view('userAdmin.create');
    }

    public function store(Request $request){
        //dd($request->except('_token','submit')); 
        Admin::create($request->except('_token','submit'));
        return redirect('/userAdmin');
    }

    public function edit($user_id){
        $admin = Admin::find($user_id);
        return view('userAdmin.edit',compact(['admin']));
    }

    public function update($user_id, Request $request){
        $admin = Admin::find($user_id);
        $admin->update($request->except('_token','submit'));
        return redirect('/userAdmin');
    }

    public function destroy($user_id){
        $admin = Admin::find($user_id);
        $admin->delete();
        return redirect('/userAdmin');
    } */
}
