<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NguoiDung;
use App\Models\SanPham;
use App\Models\DonHang;
class TrangChuAdminController extends Controller
{
    function index()
    {   
        $khach_hang = NguoiDung::where('chuc_vu', '=', 0)->count();
        $tong_san_pham = SanPham::count();
        $tong_don_hang = DonHang::count();
        //lấy ra những sản phẩm có chi tiết sản phẩm mà số lượng ít hơn 5 và lớn hơn 0
        $san_pham_sap_het_hang = SanPham::whereHas('chitietsanpham', function($query){
            $query->where('so_luong', '<', 5)->where('so_luong', '>', 0);
        })->count();
        $don_hang = DonHang::all();
        $khach_hang_moi = Nguoidung::where('chuc_vu', '=', 0)->where('created_at', '>=', date('Y-m-d', strtotime('-30 days')))->first();
        return view('admin/home', compact('khach_hang', 'tong_san_pham', 'tong_don_hang', 'san_pham_sap_het_hang', 'don_hang', 'khach_hang_moi'));
    }
}
