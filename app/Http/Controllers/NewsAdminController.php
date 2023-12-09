<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TinTuc;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class NewsAdminController extends Controller
{
    // Quản lý tin tức
    public function index(){
        $dstin = DB::table('tintuc')->orderBy('id_tin','desc')->get();
        return view('admin/qltintuc', compact('dstin'));
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
       if($request->hasFile('hinh')){
        $file = $request->file('hinh');
        $name = $file->getClientOriginalName();
        $image = time()."_".$name;
        $file->move(public_path().'/img/img-news/',$image);
        $hinh = '/img/img-news/'.$image;
    }
    if (session()->has('userInfo') && session('userInfo.ten')) {
        $tennguoidang = session('userInfo.ten');
          TinTuc::create(['id_danh_muc_tin'=>$id_danh_muc_tin,'ten_nguoi_dang'=>$tennguoidang,'tieu_de'=>$tieu_de,'tom_tat'=>$tom_tat,'noi_dung'=>$noi_dung,'hinh'=>$hinh]);
      return redirect('admin/qltintuc');
    } else {
        session()->flash('message', 'Vui lòng đăng nhập');
        return redirect()->back();
    }
     
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
    $an_hien=$request['an_hien'];
    $noi_dung=$request['noidung'];
    if($request->hasFile('hinh')){
        $file = $request->file('hinh');
        $name = $file->getClientOriginalName();
        $image = time()."_".$name;
        $file->move(public_path().'/img/img-news/',$image);
        $hinh = '/img/img-news/'.$image;
    }
    // Nếu tồn tại sẽ đc thêm vào biến updateDate và cập nhật còn không thì bỏ qua
    $updateData = [];
    
    if (isset($id_danh_muc_tin)) {
        $updateData['id_danh_muc_tin'] = $id_danh_muc_tin;
    }
    if (isset($tieu_de)) {
        $updateData['tieu_de'] = $tieu_de;
    }
    if (isset($tom_tat)) {
        $updateData['tom_tat'] = $tom_tat;
    }
    if (isset($an_hien)) {
        $updateData['an_hien'] = $an_hien;
    }
    if (isset($noi_dung)) {
        $updateData['noi_dung'] = $noi_dung;
    }
    if (isset($hinh)) {
        $updateData['hinh'] = $hinh;
    }
   TinTuc::where('id_tin',$id_tin)->update($updateData);
// end
   session()->flash('success', 'Sửa thành công');
   return redirect('admin/qltintuc');
   }
   public function deleteqltintuc(Request $request,string $id){
       TinTuc::where('id_tin',$id)->delete();
       return redirect('admin/qltintuc');
   }
}