<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\ChiTietSanPham;
use App\Models\Loai;
use App\Models\AnhSP;



class ChiTietSanPhamController extends Controller
{
    //
    function chitiet($id){
        $sanpham = SanPham::find($id);
        $anhsanpham = AnhSP::where('id_san_pham',$id)->get();
        $chitietsanpham = ChiTietSanPham::where('id_san_pham',$id)->first();
        $sanphamlienquan = SanPham::where('id_loai',$id)->orderBy('created_at','DESC')->paginate(6);
        return view('chitiet', ['sanpham' => $sanpham, 'anhsanpham' => $anhsanpham,'chitietsanpham' => $chitietsanpham,'sanphamlienquan'=>$sanphamlienquan]);


    }
   
}
