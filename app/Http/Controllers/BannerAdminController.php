<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Http\UploadedFile;

class BannerAdminController extends Controller
{
    public function index(){
       $banner= Banner::orderBy('id_banner','desc')->get();
        return view('/admin/qlbanner',['banner'=>$banner]);
    }
    public function createqlbanner(){
        return view('/admin/create-qlbanner');
    }
    public function createqlbannerpost(Request $request){
        $addbanner = new Banner();
        $addbanner->ten= $request->get('ten');
        $addbanner->mo_ta= $request->get('mo_ta');
        if ($request->hasFile('hinh')) {
            $file = $request->file('hinh');
            $name = $file->getClientOriginalName();
            $image = time()."_".$name;
            $file->move(public_path().'/admin/img-banner/',$image);
            $addbanner->hinh = '/admin/img-banner/' .$image;
        }
            $addbanner->save();
            return redirect('/admin/qlbanner');
    }
    public function editqlbanner(string $id){
        $edit=Banner::where('id_banner',$id)->first();
        return view('admin.edit-qlbanner', ['edit' => $edit]);
    }
    public function editqlbannerpost(Request $request){
     $id_banner=$request->id_banner;
     $ten=$request->ten;
     $mo_ta=$request->mo_ta;
     $trang_thai=$request->trang_thai;
     if ($request->hasFile('hinh')) {
        $file = $request->file('hinh');
        $name = $file->getClientOriginalName();
        $image = time()."_".$name;
        $file->move(public_path().'/admin/img-banner/',$image);
        $hinh = '/admin/img-banner/' .$image;
    }
        $edit = Banner::find($id_banner);
        $edit->update(['ten'=>$ten,'hinh'=>$hinh,'mo_ta'=>$mo_ta,'trang_thai'=>$trang_thai]);
        session()->flash('success', 'Sửa thành công');
    return redirect('admin/qlbanner');
    }
    public function deleteqlbanner(Request $request,string $id){
        Banner::where('id_banner',$id)->delete();
        return redirect('admin/qlbanner');
    }
}