<?php

namespace App\Http\Controllers;
use App\Models\BinhLuan;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\SanPham;
use App\Models\Loai;
use App\Models\ChiTietSanPham;
use App\Models\TinTuc;
use App\Models\DanhMucTinTuc;
use App\Models\Banner;
use App\Models\NguoiDung;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class SanphamController extends Controller
{
    public function index(){
        // slider
        $banner= Banner::where('trang_thai','1')->get();
        $sp=SanPham::limit(10)->get();
        $sp2= SanPham::where('id_san_pham','>=',100)->limit(20)->get();
        $sp3= SanPham::where('id_san_pham','>=',30)->limit(20)->get();
        $sp4= SanPham::where('id_san_pham','>=',130)->limit(20)->get();
        $sp5= SanPham::where('id_loai',2)->limit(5)->get();
        $sp6= SanPham::where('id_loai',1)->limit(5)->get();
        $sp7= DB::table('tintuc')->limit(3)->get();

        return view('home',['banner'=>$banner,'sp'=>$sp,'sp2'=>$sp2,'sp3'=>$sp3,'sp4'=>$sp4,'sp5'=>$sp5, 'sp6'=>$sp6, 'sp7'=>$sp7]);
    }
    public function dt(){
        $dt= SanPham::where('id_loai','1')->paginate(12);
        $dt1 = DB::table('sanpham')
    ->orderBy('hot')
    ->limit(5)
    ->get();
        return view('shop',['dt'=>$dt, 'dt1'=>$dt1]);
    }

    public function lt(){
        $dt = SanPham::where('id_loai', '2')->paginate(12); // 10 sản phẩm trên mỗi trang
        $dt1 = DB::table('sanpham')
    ->orderBy('hot')
    ->limit(5)
    ->get();
    return view('shop', ['dt' => $dt, 'dt1'=>$dt1]);
    }

    public function tintuc(){
            $dt = DB::table('tintuc')
            ->where('id_danh_muc_tin', '1')
            ->paginate(4);
            $dt1 = DB::table('tintuc')
            ->where('id_danh_muc_tin', '5')
            ->paginate(4);
            $dt2 = DB::table('tintuc')
            ->where('id_danh_muc_tin', '3')
            ->paginate(4);
            $dt3 = DB::table('tintuc')
            ->where('id_danh_muc_tin', '4')
            ->paginate(4);

            $tintucs = [
                'dt' => DB::table('tintuc')->where('id_danh_muc_tin', '1')->paginate(4),
                'dt1' => DB::table('tintuc')->where('id_danh_muc_tin', '5')->paginate(4),
                'dt2' => DB::table('tintuc')->where('id_danh_muc_tin', '3')->paginate(4),
                'dt3' => DB::table('tintuc')->where('id_danh_muc_tin', '4')->paginate(4),
            ];
        // Giới hạn số lượng bài viết
            // Thực hiện truy vấn sau khi gọi get()
            return view('tintuc', ['dt' => $dt,'dt1'=>$dt1, 'dt2'=>$dt2,'dt3'=>$dt3, 'tintucs'=>$tintucs]);
    }


    public function tintuctheoloai($id){
        $dt = DB::table('tintuc')
        ->where('id_danh_muc_tin', $id)
        ->limit(4) // Giới hạn số lượng bài viết
        ->get();
        $dt1 = DB::table('tintuc')
        ->orderBy('view', 'desc')
        ->limit(4) // Giới hạn số lượng bài viết
        ->get();

        $dt2 = DB::table('danhmuc_tintuc')
       // Giới hạn số lượng bài viết
        ->get();// Thực hiện truy vấn sau khi gọi get()
        return view('tintuc', ['dt' => $dt,'dt1'=>$dt1, 'dt2'=>$dt2]);
    }
    public function cttin($id){
          $binhluantin = BinhLuan::where('id_tin',$id)->get();
        $chitiettin = TinTuc::find($id);
        $tinlienquan = TinTuc::where('id_danh_muc_tin',$id)->limit(3)->get();
        $danhmuctin = DanhMucTinTuc::all();
        $randsp = SanPham::inRandomOrder()->first();
        $randspchitiet = null;
        $sanpham = SanPham::where('hot',1)->limit(4)->get();
        if ($randsp) {
        $randspchitiet = ChiTietSanPham::where('id_san_pham', $randsp->id)->first();
        }
        return view('chitiettin',['id'=>$id,'binhluantin'=>$binhluantin,'chitiettin'=>$chitiettin,'tinlienquan'=>$tinlienquan,'danhmuctin'=>$danhmuctin,'randsp' => $randsp,'randspchitiet' => $randspchitiet,'sanpham'=>$sanpham]);
    }
    public function mtb(){
        $dt= SanPham::where('id_loai','3')->paginate(12);
        $dt1 = DB::table('sanpham')
    ->orderBy('hot')
    ->limit(5)
    ->get();
        return view('shop',['dt'=>$dt,'dt1'=>$dt1]);
    }
    public function qlsanpham(){
        $sanpham = SanPham::get();
        return view('admin/qlsanpham',compact('sanpham'));
    }
    public function create(){
        //lấy id của tất cả danh mục
        $danhmuc = DB::table('loai')->get();
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

        if ($request->hasFile('ImageUpload')) {
            $file = $request->file('ImageUpload');
            $name = $file->getClientOriginalName();
            $image = time() . "_" . $name;
            $file->move(public_path().'/img/', $image);
            $sanpham->hinh = $image;
        } else {
            $sanpham->hinh = 'default_image.jpg'; // Thay thế bằng giá trị mặc định mong muốn
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

    $sanphamData = array(
        'ten_san_pham' => $request->tensanpham,
        'mo_ta' => $request->content,
        'gia' => $request->giatien,
        'gia_khuyen_mai' => $request->giakhuyenmai,
    );

    if($request->danhmuc != null){
        $sanphamData['id_loai'] = $request->danhmuc;
    }

    if($request->anhien != null){
        $sanphamData['an_hien'] = $request->anhien;
    }

    if($request->hasFile('ImageUpload')){
        $file = $request->file('ImageUpload');
        $name = $file->getClientOriginalName();
        $image = time()."_".$name;
        $file->move(public_path().'/img/',$image);
        $sanphamData['hinh'] = $image;
    }

    SanPham::where('id_san_pham', $id)->update($sanphamData);

    return redirect()->route('admin-qlsanpham');
}
    public function destroy($id){
        $sanpham = SanPham::where('id_san_pham',$id)->first();
        $sanpham->delete();
        return redirect()->route('admin-qlsanpham');
    }
    public function qlchitietsanpham($id){
        $chitietsanpham = DB::table('chitietsanpham')->where('id_san_pham', $id)->get();
        $sanpham = SanPham::where('id_san_pham', $id)->first();
        return view('admin/qlchitietsanpham', compact('sanpham', 'chitietsanpham'));
    }
    public function createchitietsanpham($id){
        $sanpham = SanPham::where('id_san_pham', $id)->first();
        return view('admin/create-qlchitietsanpham', compact('sanpham'));
    }
    public function storechitietsanpham(Request $request){
    $request->validate ( [


        'soluong' => 'required|integer',
        // 'ram' => 'required|string',
        'giaban' => 'required|numeric',
        // 'ImageUpload' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ],

    [
        'soluong.required' => 'Số lượng không được bỏ trống.',
        // 'ram.required' => 'Vui lòng nhập thông tin RAM.',
        'giaban.required' => 'Giá bán không được bỏ trống.',
        // 'ImageUpload.image' => 'Hình ảnh phải là một file hình ảnh.',
    ]);

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
        $chitietsanpham = DB::table('chitietsanpham')->where('id_chi_tiet', $id_chi_tiet)->first();
        $sanpham = SanPham::where('id_san_pham', $id_san_pham)->first();
        return view('admin/edit-qlchitietsanpham', compact('chitietsanpham', 'sanpham'));
    }
    public function updatechitietsanpham(Request $request){
        $id=$request->idchitietsanpham;
        $chitietsanpham = DB::table('chitietsanpham')->where('id_chi_tiet', $id)->first();
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
  function chitietsp($id){
        $tin = SanPham::where('id_san_pham', $id)->first();
        $tin1 = DB::table('chitietsanpham')->where('id_san_pham', $id)->get();
        $tin2 = DB::table('chitietsanpham')->where('id_san_pham', $id)->first();

        $idsp = $tin->id_san_pham;
        $product = BinhLuan::where('id_san_pham', $idsp)->get();
        $chitietsp = DB::table('chitietsanpham')->where('id_san_pham',$idsp)->get();
        var_dump($tin1);
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
            $products = SanPham::orderBy('created_at', 'desc')->limit(4)->get();
            $count = count($listtin);
            return view('shopsearch', ['listtin'=>$listtin,'keyword'=>$keyword,'count'=>$count,'product'=>$products]);
        }
        public function deletechitietsanpham(Request $request)
        {
            $id_chi_tiet = $request->input('id_chi_tiet');
            $id_san_pham = $request->input('id_sanpham');
            $chitietsanpham = DB::table('chitietsanpham')->where('id_chi_tiet', $id_chi_tiet)->delete();
            return redirect('admin/qlchitietsanpham' . $id_san_pham);
        }

        public function timKiem(Request $request)
        {
            $tu = $request->input('tu');
            $den = $request->input('den');
            $hang = $request->input('hang');
            $loai = $request->input('loai');

            $query = SanPham::query();

            // Kiểm tra và thêm điều kiện cho giá
            if (!empty($tu) && !empty($den)) {
                $query->whereBetween('gia', [$tu, $den]);
            }

            // Kiểm tra và thêm điều kiện cho hãng
            if ($hang != 'Khac') {
                $query->where('ten_san_pham', 'LIKE', "%$hang%");
            }

            // Kiểm tra và thêm điều kiện cho loại
            if ($loai != 'Khac') {
                $query->where('id_loai', $loai);
            }

            // Thực hiện truy vấn và lấy kết quả
            $dt = $query->paginate(10); // Số sản phẩm trên mỗi trang

            return view('shop', compact('dt', 'query'));
        }

public function getProductsByManufacturer($manufacturer)
{
    // Lấy danh sách sản phẩm từ cơ sở dữ liệu dựa trên hãng
    $products = ChiTietSanPham::where('thuong_hieu', $manufacturer)->get();

    // Trả về dữ liệu dưới dạng JSON
    return response()->json($products);
}


}
