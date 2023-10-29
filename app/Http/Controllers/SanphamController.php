<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\SanPham;
use App\Models\Loai;
use App\Models\ChiTietSanPham;
use Carbon\Carbon;

class SanphamController extends Controller
{
    public function index(){
        $sp= \DB::table('sanpham')->limit(10)->get();
        $sp2= \DB::table('sanpham')->where('id_san_pham','>=',100)->limit(20)->get();
        $sp3= \DB::table('sanpham')->where('id_san_pham','>=',30)->limit(20)->get();
        $sp4= \DB::table('sanpham')->where('id_san_pham','>=',130)->limit(20)->get();
        return view('home',['sp'=>$sp,'sp2'=>$sp2,'sp3'=>$sp3,'sp4'=>$sp4]);
    }
    public function dt(){
        $dt= \DB::table('sanpham')->where('id_loai','1')->get();
        return view('shop',['dt'=>$dt]);
    }
    public function qlsanpham(){
        $sanpham = SanPham::all();
        return view('admin/qlsanpham',compact('sanpham'));
    }
    public function create(){
        //lấy id của tất cả danh mục
        $danhmuc = Loai::all();
        return view('admin/create-qlsanpham',compact('danhmuc'));
    }
    public function store(Request $request){
        $sanpham = new SanPham();
        $sanpham->ten_san_pham = $request->tensanpham;
        $sanpham->id_loai = $request->danhmuc;
        $sanpham->mo_ta = $request->content;
        $sanpham->an_hien = $request->anhien;
        $sanpham->gia = $request->giatien;
        $sanpham->gia_khuyen_mai = $request->giakhuyenmai;
        if($request->hasFile('ImageUpload')){
            $file = $request->file('ImageUpload');
            $name = $file->getClientOriginalName();
            $image = time()."_".$name;
            $file->move(public_path().'/img/',$image);
            $sanpham->hinh = $image;
        }
        $sanpham->save();
        return redirect()->route('admin-qlsanpham');
    }
    public function edit($id){
        $sanpham = SanPham::where('id_san_pham',$id)->first();
        $danhmuc = Loai::all();
        return view('admin/edit-qlsanpham',compact('sanpham','danhmuc'));
    }
    public function update(Request $request){
        $id = $request->id_san_pham;
        $sanpham = SanPham::where('id_san_pham',$id)->first();
        $sanpham->ten_san_pham = $request->tensanpham;
        if($request->danhmuc != null){
            $sanpham->id_loai = $request->danhmuc;
        }
        $sanpham->mo_ta = $request->content;
        if($request->anhien != null){
            $sanpham->an_hien = $request->anhien;
        }
        $sanpham->gia = $request->giatien;
        $sanpham->gia_khuyen_mai = $request->giakhuyenmai;
        if($request->hasFile('ImageUpload')){
            $file = $request->file('ImageUpload');
            $name = $file->getClientOriginalName();
            $image = time()."_".$name;
            $file->move(public_path().'/img/',$image);
            $sanpham->hinh = $image;
        }
        $sanpham->save();
        return redirect()->route('admin-qlsanpham');
    }
    public function destroy($id){
        $sanpham = SanPham::where('id_san_pham',$id)->first();
        $sanpham->delete();
        return redirect()->route('admin-qlsanpham');
    }
    public function qlchitietsanpham($id){
        $chitietsanpham = ChiTietSanPham::where('id_san_pham', $id)->get();
        $sanpham = SanPham::where('id_san_pham', $id)->first();
        return view('admin/qlchitietsanpham', compact('sanpham', 'chitietsanpham'));
    }    
    public function createchitietsanpham($id){
        $sanpham = SanPham::where('id_san_pham', $id)->first();
        return view('admin/create-qlchitietsanpham', compact('sanpham'));
    }
    public function storechitietsanpham(Request $request){
        $chitietsanpham = new ChiTietSanPham();
        $chitietsanpham->id_san_pham = $request->masanpham;
        $chitietsanpham->so_luong = $request->soluong;
        $chitietsanpham->RAM = $request->ram;
        $chitietsanpham->CPU = $request->cpu;
        $chitietsanpham->ROM = $request->rom;
        $chitietsanpham->mau_sac = $request->mausac;
        $chitietsanpham->can_nang = $request->cannang;
        $chitietsanpham->GPU = $request->gpu;
        $chitietsanpham->man_hinh = $request->manhinh;
        $chitietsanpham->kich_thuoc = $request->kichthuoc;
        $chitietsanpham->xuat_xu = $request->xuatxu;
        $chitietsanpham->thoi_diem_ra_mat = $request->thoidiemramat;
        $chitietsanpham->he_dieu_hanh = $request->hedieuhanh;
        $chitietsanpham->camera_truoc = $request->cameratruoc;
        $chitietsanpham->camera_sau = $request->camerasau;
        $chitietsanpham->dung_luong_pin = $request->dungluongpin;
        $chitietsanpham->sim = $request->sim;
        $chitietsanpham->tinh_nang = $request->tinhnang;
        $chitietsanpham->bao_hanh = $request->baohanh;
        $chitietsanpham->cong_giao_tiep = $request->conggiaotiep;
        $chitietsanpham->thuong_hieu = $request->thuonghieu;
        $chitietsanpham->do_dai_day = $request->dodaiday;
        $chitietsanpham->loai_tai_nghe = $request->loaitainghe;
        $chitietsanpham->chat_lieu = $request->chatlieu;
        $chitietsanpham->thoi_gian_sac_day = $request->thoigiansacday;
        $chitietsanpham->thoi_gian_su_dung = $request->thoigiansudung;
        $chitietsanpham->dai_tan_so = $request->daitanso;
        $chitietsanpham->gia = $request->giaban;
        if($request->hasFile('ImageUpload')){
            $file = $request->file('ImageUpload');
            $name = $file->getClientOriginalName();
            $image = time()."_".$name;
            $file->move(public_path().'/img/',$image);
            $chitietsanpham->hinh = '/img/'.$image;
        }
        $chitietsanpham->save();
        return redirect()->route('admin-qlchitietsanpham', ['id' => $request->masanpham]);
    }
    public function editchitietsanpham(Request $request){
        $id_chi_tiet = $request->input('id_chi_tiet');
        $id_san_pham = $request->input('id_sanpham');
        $chitietsanpham = ChiTietSanPham::where('id_chi_tiet', $id_chi_tiet)->first();
        $sanpham = SanPham::where('id_san_pham', $id_san_pham)->first();
        return view('admin/edit-qlchitietsanpham', compact('chitietsanpham', 'sanpham'));
    }
    public function updatechitietsanpham(Request $request){
        $id=$request->idchitietsanpham;
        $chitietsanpham = ChiTietSanPham::where('id_chi_tiet', $id)->first();
        $chitietsanpham->id_san_pham = $request->masanpham;
        $chitietsanpham->so_luong = $request->soluong;
        $chitietsanpham->RAM = $request->ram;
        $chitietsanpham->CPU = $request->cpu;
        $chitietsanpham->ROM = $request->rom;
        $chitietsanpham->mau_sac = $request->mausac;
        $chitietsanpham->can_nang = $request->cannang;
        $chitietsanpham->GPU = $request->gpu;
        $chitietsanpham->man_hinh = $request->manhinh;
        $chitietsanpham->kich_thuoc = $request->kichthuoc;
        $chitietsanpham->xuat_xu = $request->xuatxu;
        $chitietsanpham->thoi_diem_ra_mat = $request->thoidiemramat;
        $chitietsanpham->he_dieu_hanh = $request->hedieuhanh;
        $chitietsanpham->camera_truoc = $request->cameratruoc;
        $chitietsanpham->camera_sau = $request->camerasau;
        $chitietsanpham->dung_luong_pin = $request->dungluongpin;
        $chitietsanpham->sim = $request->sim;
        $chitietsanpham->tinh_nang = $request->tinhnang;
        $chitietsanpham->bao_hanh = $request->baohanh;
        $chitietsanpham->cong_giao_tiep = $request->conggiaotiep;
        $chitietsanpham->thuong_hieu = $request->thuonghieu;
        $chitietsanpham->do_dai_day = $request->dodaiday;
        $chitietsanpham->loai_tai_nghe = $request->loaitainghe;
        $chitietsanpham->chat_lieu = $request->chatlieu;
        $chitietsanpham->thoi_gian_sac_day = $request->thoigiansacday;
        $chitietsanpham->thoi_gian_su_dung = $request->thoigiansudung;
        $chitietsanpham->dai_tan_so = $request->daitanso;
        $chitietsanpham->gia = $request->giaban;
        if($request->hasFile('ImageUpload')){
            $file = $request->file('ImageUpload');
            $name = $file->getClientOriginalName();
            $image = time()."_".$name;
            $file->move(public_path().'/img/',$image);
            $chitietsanpham->hinh = '/img/'.$image;
        }
        $chitietsanpham->save();
        return redirect()->route('admin-qlchitietsanpham', ['id' => $request->masanpham]);
    }
}
