<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nguoidung;
use App\Models\DonHang;
use App\Models\ChiTietSanPham;
class BaoCaoDoanhThuController extends Controller
{
    //lấy nhân viên từ database có chức vụ khác 0
    public function index()
    {
        //đếm số lượng nhân viên
        $nhan_vien = Nguoidung::where('chuc_vu', '!=', 0)->count();
        $tong_thu_nhap = DonHang::sum('tong_don_hang');
        $tong_san_pham = ChiTietSanPham::sum('so_luong');
        //lấy tài những tài khoảng nhân viên mới từ ngày hôm nay đến 30 ngày trước
        $nhan_vien_moi = Nguoidung::where('chuc_vu', '!=', 0)->where('created_at', '>=', date('Y-m-d', strtotime('-30 days')))->count();
        return view('admin/bcdoanhthu', compact('nhan_vien', 'tong_thu_nhap', 'tong_san_pham', 'nhan_vien_moi'));
    }
}
