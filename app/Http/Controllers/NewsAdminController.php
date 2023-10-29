<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TinTuc;
use Illuminate\Support\Facades\Auth;

class NewsAdminController extends Controller
{
    // Quản lý tin tức
    public function index(){
        $dstin=TinTuc::orderBy('id_tin','desc')->get();
       return view('admin/qltintuc',['dstin'=>$dstin]);
   }
   public function createqltintuc(){
    $loaitin=\DB::table('danhmuc_tintuc')->get();
       return view('admin/create-qltintuc',['loaitin'=>$loaitin]);
   }
   public function createqltintucpost(Request $request){
       $id_danh_muc_tin=$request['id_danh_muc_tin'];
       $tieu_de=$request['tieude'];
       $tom_tat=$request['tomtat'];
       $noi_dung=$request['noidung'];
       $hinh=$request['hinh'];
       $tennguoidang = session('userInfo')['ten'];
       TinTuc::create(['id_danh_muc_tin'=>$id_danh_muc_tin,'ten_nguoi_dang'=>$tennguoidang,'tieu_de'=>$tieu_de,'tom_tat'=>$tom_tat,'noi_dung'=>$noi_dung,'hinh'=>$hinh]);
      return redirect('admin/qltintuc');
   }
   public function editqltintuc(string $id){
    $loaitin=\DB::table('danhmuc_tintuc')->get();
   $edit=TinTuc::where('id_tin',$id)->first();
   return view('admin/edit-qltintuc',['edit'=>$edit,'loaitin'=>$loaitin]);
   }
   public function editqltintucpost(Request $request ){
    $id_tin=$request['id_tin'];
    $id_danh_muc_tin=$request['id_danh_muc_tin'];
    $tieu_de=$request['tieude'];
    $tom_tat=$request['tomtat'];
    $noi_dung=$request['noidung'];
    $hinh=$request['hinh'];
   TinTuc::where('id_tin',$id_tin)->update(['id_danh_muc_tin'=>$id_danh_muc_tin,'tieu_de'=>$tieu_de,'tom_tat'=>$tom_tat,'noi_dung'=>$noi_dung,'hinh'=>$hinh]);
   session()->flash('success', 'Sửa thành công');
   return redirect('admin/qltintuc');
   }
   public function deleteqltintuc(Request $request,string $id){
       TinTuc::where('id_tin',$id)->delete();
       return redirect('admin/qltintuc');
   }
}