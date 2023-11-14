<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NguoiDung;

class EmployeeAdminController extends Controller
{
    // Quản lý nhân viên 
    public function index(){
         $dsnhanvien=NguoiDung::orderBy('id_nguoi_dung','desc')->get();
        return view('admin/qlnhanvien',['dsnhanvien'=>$dsnhanvien]);
    }
    public function createqlnhanvien(){
        return view('admin/create-qlnhanvien');
    }
    public function createqlnhanvienpost(Request $request){
        $ten=$request['hoten'];
        $email=$request['email'];
        $password=$request['password'];
        $dia_chi=$request['dc_tt'];
        $so_dien_thoai=$request['sdt'];
        $ngay_sinh=$request['ngaysinh'];
        $noi_sinh=$request['noisinh'];
        $CCCD=$request['cccd'];
        $ngay_cap=$request['ngaycap'];
        $noi_cap=$request['noicap'];
        $gioi_tinh=$request['gioitinh'];
        $chuc_vu=$request['chucvu'];
        $bang_cap=$request['bangcap'];
        $tinh_trang_hon_nhan=$request['tthonnhan'];
        if($request->hasFile('hinh')){
            $file = $request->file('hinh');
            $name = $file->getClientOriginalName();
            $image = time()."_".$name;
            $file->move(public_path().'/img/img-anhthe/',$image);
            $hinh = '/img/img-anhthe/'.$image;
        }
        NguoiDung::create(['ten'=>$ten,'email'=>$email,'password'=>$password,'dia_chi'=>$dia_chi,'so_dien_thoai'=>$so_dien_thoai,
        'ngay_sinh'=>$ngay_sinh,'noi_sinh'=>$noi_sinh,'CCCD'=>$CCCD,'ngay_cap'=>$ngay_cap,'noi_cap'=>$noi_cap,'gioi_tinh'=>$gioi_tinh,'chuc_vu'=>$chuc_vu,'bang_cap'=>$bang_cap,
        'tinh_trang_hon_nhan'=>$tinh_trang_hon_nhan,'hinh'=>$hinh]);
       return redirect('admin/qlnhanvien');
    }
    public function editqlnhanvien(string $id){
        
    $edit=NguoiDung::where('id_nguoi_dung',$id)->first();
    return view('admin/edit-qlnhanvien')->with('edit', $edit);
    
    }
    public function editqlnhanvienpost(Request $request){
        $id_nguoi_dung=$request['id'];
        $ten=$request['hoten'];
        $email=$request['email'];
        $password=$request['password'];
        $dia_chi=$request['dc_tt'];
        $so_dien_thoai=$request['sdt'];
        $ngay_sinh=$request['ngaysinh'];
        $noi_sinh=$request['noisinh'];
        $CCCD=$request['cccd'];
        $ngay_cap=$request['ngaycap'];
        $noi_cap=$request['noicap'];
        $gioi_tinh=$request['gioitinh'];
        $chuc_vu=$request['chucvu'];
        $bang_cap=$request['bangcap'];
        $tinh_trang_hon_nhan=$request['tthonnhan'];
        if($request->hasFile('hinh')){
            $file = $request->file('hinh');
            $name = $file->getClientOriginalName();
            $image = time()."_".$name;
            $file->move(public_path().'/img/img-anhthe/',$image);
            $hinh = '/img/img-anhthe/'.$image;
        }
        NguoiDung::where('id_nguoi_dung',$id_nguoi_dung)->update(['ten'=>$ten,'email'=>$email,'password'=>$password,'dia_chi'=>$dia_chi,'so_dien_thoai'=>$so_dien_thoai,
    'ngay_sinh'=>$ngay_sinh,'noi_sinh'=>$noi_sinh,'CCCD'=>$CCCD,'ngay_cap'=>$ngay_cap,'noi_cap'=>$noi_cap,'gioi_tinh'=>$gioi_tinh,'chuc_vu'=>$chuc_vu,'bang_cap'=>$bang_cap,
    'tinh_trang_hon_nhan'=>$tinh_trang_hon_nhan,'hinh'=>$hinh]);
    session()->flash('success', 'Sửa thành công');
    return redirect('admin/qlnhanvien');
    }
    public function deleteqlnhanvien(Request $request,string $id){
        NguoiDung::where('id_nguoi_dung',$id)->delete();
        return redirect('admin/qlnhanvien');
    }
}