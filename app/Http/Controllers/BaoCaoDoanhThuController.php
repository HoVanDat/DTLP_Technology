<!-- <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nguoidung;
use App\Models\DonHang;
use App\Models\ChiTietSanPham;
use App\Models\SanPham;
class BaoCaoDoanhThuController extends Controller
{
    //lấy nhân viên từ database có chức vụ khác 0
    public function index()
    {
        //đếm số lượng nhân viên
        $nhan_vien = Nguoidung::where('chuc_vu', '!=', 0)->count();
        $tong_thu_nhap = DonHang::sum('tong_don_hang');
        $tong_san_pham = SanPham::count();
        //lấy tài những tài khoảng nhân viên mới từ ngày hôm nay đến 30 ngày trước
        $nhan_vien_moi = Nguoidung::where('chuc_vu', '!=', 0)->where('created_at', '>=', date('Y-m-d', strtotime('-30 days')))->count();
        //nếu sản phẩm có chi tiết sản phẩm thì lấy ra , nếu không thì không lấy, tôi không có cột trạng thái trong bảng sản phẩm
        $san_pham = SanPham::whereHas('chitietsanpham')->count();
        $san_pham_het_hang = $tong_san_pham - $san_pham;
        $tong_don_hang = DonHang::where('trang_thai', 1)->count();
        $nhan_vien_bi_cam = Nguoidung::where('chuc_vu','!=',0)->where('lock',1)->count();
        $don_hang_bi_huy = DonHang::where('trang_thai', 0)->count();
        //lấy id_san_pham từ đơn hàng, tổng số lượng id sản phẩm đó, sắp xếp từ lớn đến bé, lấy 5 sản phẩm đầu tiên //



        //lấy tất cả đơn hàng
        $don_hang = DonHang::all();
        return view('admin/bcdoanhthu', compact('nhan_vien', 'tong_thu_nhap', 'tong_san_pham', 'nhan_vien_moi', 'tong_don_hang', 'san_pham_het_hang','nhan_vien_bi_cam','don_hang_bi_huy'));
    }
} ?> -->
