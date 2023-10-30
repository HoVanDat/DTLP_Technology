<?php

namespace App\Http\Controllers;
use App\Models\BinhLuan;
use App\Models\SanPham;

use Illuminate\Http\Request;
use DB;
class SanphamController extends Controller
{
    public function index(){
        $sp=DB::table('sanpham')->limit(10)->get();
        $sp2= DB::table('sanpham')->where('id_san_pham','>=',100)->limit(20)->get();
        $sp3= DB::table('sanpham')->where('id_san_pham','>=',30)->limit(20)->get();
        $sp4= DB::table('sanpham')->where('id_san_pham','>=',130)->limit(20)->get();
        return view('home',['sp'=>$sp,'sp2'=>$sp2,'sp3'=>$sp3,'sp4'=>$sp4]);
    }
    public function dt(){
        $dt= DB::table('sanpham')->where('id_loai','1')->paginate(12);
        return view('shop',['dt'=>$dt]);
    }
    public function lt(){
        $dt = DB::table('sanpham')->where('id_loai', '2')->paginate(10); // 10 sản phẩm trên mỗi trang
    return view('shop', ['dt' => $dt]);
    }


    public function tintuc(){
        $dt = DB::table('tintuc')->paginate(10); // 10 sản phẩm trên mỗi trang
        $dt1 = DB::table('tintuc')
        ->orderBy('view', 'desc')
        ->limit(4) // Giới hạn số lượng bài viết
        ->get(); // Thực hiện truy vấn sau khi gọi get()
        return view('tintuc', ['dt' => $dt,'dt1'=>$dt1]);
    }
    public function mtb(){
        $dt= DB::table('sanpham')->where('id_loai','3')->paginate(13);
        return view('shop',['dt'=>$dt]);
    }


    function chitietsp($id){
        $tin = DB::table('sanpham')->where('id_san_pham', $id)->first();
        $tin1 = DB::table('chitietsanpham')->where('id_san_pham', $id)->get();
        $tin2 = DB::table('chitietsanpham')->where('id_san_pham', $id)->first();

        $idsp = $tin->id_san_pham;
        $product = BinhLuan::where('id_san_pham', $idsp)->get();

        // Tạo một mảng để lưu trữ tất cả đánh giá
        // $ratings = [];

        // Lặp qua danh sách đánh giá và lấy ra các giá trị sao
        // foreach ($product as $item) {
        //     $ratings[] = $item->sao;
        // }

        // Tính toán số sao trung bình
        // if (count($ratings) > 0) {
        //     $totalRatings = array_sum($ratings);
        //     $averageRating = $totalRatings / count($ratings);
        // } else {
        //     $averageRating = 0;
        // }

        $data = ['id' => $id, 'tin' => $tin, 'tin1'=>$tin1, 'tin2'=>$tin2, 'binhluan'=>$product];
        return view('chitiet', $data);
    }

        public function filter(Request $request)
        {
            $selectedPrices = $request->input('price', []);

            $query = SanPham::query();

            if (in_array('under-2m', $selectedPrices)) {
                $query->where('gia', '<', 2000000);
            }

            if (in_array('2m-to-5m', $selectedPrices)) {
                $query->whereBetween('gia', [2000000, 5000000]);
            }

            if (in_array('above-5m', $selectedPrices)) {
                $query->where('gia', '>', 5000000);
            }

            $filteredProducts = $query->get();

            return view('shop', ['dt' => $filteredProducts]);
        }

        function search(Request $request){
            $keyword = $request->input('keyword');
            $listtin = DB::table("sanpham")
            ->where('ten_san_pham','LIKE',"%$keyword%")
            ->get();
            $products = SanPham::orderBy('ngay_dang', 'desc')->limit(4)->get();
            $count = count($listtin);
            return view('shopsearch', ['listtin'=>$listtin,'keyword'=>$keyword,'count'=>$count,'product'=>$products]);

        }
}
