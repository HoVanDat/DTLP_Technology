<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DanhMucTinTuc;
use App\Models\Loai;

class CategoryAdminController extends Controller
{
    public function qldanhmuctintuc(){
        $danhmuctin=DanhMucTinTuc::get();
        return view('admin/qldanhmuctintuc',['danhmuctin'=>$danhmuctin]);
    }

    public function createqldanhmuctintuc(){
        return view('admin/create-qldanhmuctintuc');
    }
    public function createqldanhmuctintucpost(Request $request){
        $ten_danh_muc= $request->tendanhmuc;
        DanhMucTinTuc::create(['ten_danh_muc'=>$ten_danh_muc]);
        return redirect('admin/qldanhmuctintuc');
    }
    public function editqldanhmuctintuc(string $id){
       $edit=DanhMucTinTuc::where('id_danh_muc_tin',$id)->first();
       return view('admin/edit-qldanhmuctintuc',['edit'=>$edit]);
       }
       public function editqldanhmuctintucpost(Request $request ){

        $id_danh_muc_tin=$request['id_danh_muc_tin'];
        $ten_danh_muc=$request['ten_danh_muc'];
       DanhMucTinTuc::where('id_danh_muc_tin',$id_danh_muc_tin)->update(['ten_danh_muc'=>$ten_danh_muc]);
       session()->flash('success', 'Sửa thành công');
       return redirect('admin/qldanhmuctintuc');
       }

    public function deleteqldanhmuctintuc(Request $request,string $id){
        DanhMucTinTuc::where('id_danh_muc_tin',$id)->delete();
        return redirect('admin/qldanhmuctintuc');
    }  
    // sản phẩm
    public function qldanhmucsanpham(){
        $danhmuctin=Loai::get();
        return view('admin/qldanhmucsanpham',['danhmuctin'=>$danhmuctin]);
    }
    
    public function createqldanhmucsanpham(){
        return view('admin/create-qldanhmucsanpham');
    }
    public function createqldanhmucsanphampost(Request $request){
        $ten_loai= $request->tenloai;
       Loai::create(['ten_loai'=>$ten_loai]);
        return redirect('admin/qldanhmucsanpham');
    }

    public function editqldanhmucsanpham(string $id){
       $edit=Loai::where('id_loai',$id)->first();
       return view('admin/edit-qldanhmucsanpham',['edit'=>$edit]);
       }
       public function editqldanhmucsanphampost(Request $request ){

        $id_loai=$request['id_loai'];
        $ten_loai=$request['ten_loai'];
      Loai::where('id_loai',$id_loai)->update(['ten_loai'=>$ten_loai]);
       session()->flash('success', 'Sửa thành công');
       return redirect('admin/qldanhmucsanpham');
       }

    public function deleteqldanhmucsanpham(Request $request,string $id){
        Loai::where('id_loai',$id)->delete();
        return redirect('admin/qldanhmucsanpham');
    }  
}
