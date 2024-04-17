<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function dashboard(){
        if(Auth::check()){
            return view('admin.dashboard-admin');
        }else{
            return redirect('/login');
        }
    }

    public function kelola(){
        if(Auth::check()){
            $admin = Admin::all();
            return view('admin.kelola-admin',compact(['admin']));
        }else{
            return redirect('/login');
        }
    }

    public function edit($user_id){
        if(Auth::check()){
            $admin = Admin::find($user_id);
            return view('admin.edit-akun',compact(['admin']));
        }else{
            return redirect('/login');
        }
        
    }

    public function update($user_id, Request $request){
        if(Auth::check()){
            $admin = Admin::find($user_id);
            if (array_key_exists('password', $request->all())) {
                $request['password'] = Hash::make($request->password);
            }
            $updatableColumns = ['username','password','userFullName']; // Adjust based on your specific columns

            $updateData = array_filter($request->all(), function ($key) use ($updatableColumns) {
                return in_array($key, $updatableColumns);
            }, ARRAY_FILTER_USE_KEY);
        
            $admin->update($updateData);
            return redirect('/admin/kelola-admin')->with('success', 'Admin updated successfully!');
        }else{
            return redirect('/login');
        }
        
    }

    public function delete($user_id){
        if(Auth::check()){
            $admin = Admin::find($user_id);
            $admin->delete();
            return redirect('/admin/kelola-admin');
        }else{
            return redirect('/login');
        }
        
    }

    public function create(){
        if(Auth::check()){
            return view('admin.tambah-akun');
        }else{
            return redirect('/login');
        }
    }

    public function store(Request $request){
        if(Auth::check()){
            if (array_key_exists('password', $request->all())) {
                $request['password'] = Hash::make($request->password);
            }
            Admin::create($request->except('_token','submit'));
            return redirect('/admin/kelola-admin')->with('success', 'Admin created successfully!');
        }else{
            return redirect('/login');
        }
    }
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
