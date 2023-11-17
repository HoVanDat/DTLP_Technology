<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TinTuc;
use App\Models\DanhMucTinTuc;
use App\Models\SanPham;



class TinKhuyenMaiController extends Controller
{
    function tinkhuyenmai(){
        $danhmuc=DanhMucTinTuc::limit(4)->get();
        $nhieuluotxem= TinTuc::where('id_danh_muc_tin','8')->orderBy('view','DESC')->limit(4)->get();
        $baivietmoinhat= TinTuc::where('id_danh_muc_tin','8')->orderBy('created_at','DESC')->limit(4)->get();
        
        $topsellers = SanPham::where('hot','1')->limit(3)->get();
        $topviewer = SanPham::orderBy('so_luot_xem','DESC')->limit(3)->get();
        $giamgianhieunhat = SanPham::where('gia_khuyen_mai', '>', 0)
        ->orderByRaw('gia - gia_khuyen_mai DESC')
        ->limit(3)
        ->get();        
        return view('khuyenmai',['danhmuc'=>$danhmuc,'baivietmoinhat'=>$baivietmoinhat,'nhieuluotxem'=>$nhieuluotxem,'topsellers'=>$topsellers,'topviewer'=>$topviewer,'giamgianhieunhat'=>$giamgianhieunhat]);
    }
}
