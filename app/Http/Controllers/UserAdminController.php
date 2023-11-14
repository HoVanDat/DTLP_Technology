<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class UserAdminController extends Controller
{
    public function index()
    {   
        $users = User::all();
        return view('admin/qlkhachhang',compact('users'));
    }
    public function edit($id)
    {   
        
        $user = User::where('id_nguoi_dung', $id)->first();
        return view('admin/edit-qlkhachhang',compact('user'));
    }
    public function update(Request $request){
        $id = $request->id;
        $user = User::where('id_nguoi_dung', $id)->first();
        if ($request->filled('name')) {
            $user->ten = $request->name;
        }
        if ($request->filled('email')) {
            $user->email = $request->email;
        }
        if ($request->filled('password')) {
            $user->password = $request->password;
        }
        if ($request->filled('address')) {
            $user->dia_chi = $request->address;
        }
        if ($request->filled('phone')) {
            $user->so_dien_thoai = $request->phone;
        }
        $user->ngay_sinh = $request->birthdate;
        $user->gioi_tinh = $request->exampleSelect2;
        if($request->hasFile('ImageUpload')){
            $file = $request->file('ImageUpload');
            $name = $file->getClientOriginalName();
            $image = time()."_".$name;
            $file->move(public_path().'/img/',$image);
            $user->hinh = '/img/' .$image;
        }
        $user->save();
        return redirect()->route('admin-qlkhachhang');
    }
    public function store(Request $request)
    {   
        $user = new User();
        $user->ten = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        // $user->dia_chi = $request->address;
        if ($request->filled('address')) {
            $user->dia_chi = $request->address;
        }
        // $user->so_dien_thoai = $request->phone;
        if ($request->filled('phone')) {
            $user->so_dien_thoai = $request->phone;
        }
        $user->ngay_sinh = $request->birthday;
        $user->gioi_tinh = $request->exampleSelect2;
        if($request->hasFile('ImageUpload')){
            $file = $request->file('ImageUpload');
            $name = $file->getClientOriginalName();
            $image = time()."_".$name;
            $file->move(public_path().'/img/',$image);
            $user->hinh = '/img/' .$image;
        }
        $user->save();
        return redirect()->route('admin-qlkhachhang');
    }
    public function destroy($id)
    {
        $user = User::where('id_nguoi_dung', $id)->first();
        $user->delete();
        return redirect()->route('admin-qlkhachhang');
    }
    public function block($id)
    {
        $user = User::where('id_nguoi_dung', $id)->first();
        $user->lock = 1;
        $user->save();
        return redirect()->route('admin-qlkhachhang');
    }
    public function unblock($id)
    {
        $user = User::where('id_nguoi_dung', $id)->first();
        $user->lock = 0;
        $user->save();
        return redirect()->route('admin-qlkhachhang');
    }
}
