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
use App\Models\NguoiDung;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class SanphamController extends Controller
{
    public function index(){
        $sp=DB::table('sanpham')->limit(10)->get();
        $sp2= DB::table('sanpham')->where('id_san_pham','>=',100)->limit(20)->get();
        $sp3= DB::table('sanpham')->where('id_san_pham','>=',30)->limit(20)->get();
        $sp4= DB::table('sanpham')->where('id_san_pham','>=',130)->limit(20)->get();
        $sp5= DB::table('sanpham')->where('id_loai',2)->limit(5)->get();
        $sp6= DB::table('sanpham')->where('id_loai',1)->limit(5)->get();
        $sp7= DB::table('tintuc')->limit(3)->get();

        return view('home',['sp'=>$sp,'sp2'=>$sp2,'sp3'=>$sp3,'sp4'=>$sp4,'sp5'=>$sp5, 'sp6'=>$sp6, 'sp7'=>$sp7]);
    }
    public function dt(){
        $dt= DB::table('sanpham')->where('id_loai','1')->paginate(9);
        $dt1 = DB::table('sanpham')
    ->orderBy('hot')
    ->limit(5)
    ->get();
        return view('shop',['dt'=>$dt, 'dt1'=>$dt1]);
    }

    public function lt(){
        $dt = DB::table('sanpham')->where('id_loai', '2')->paginate(9); // 10 sản phẩm trên mỗi trang
        $dt1 = DB::table('sanpham')
    ->orderBy('hot')
    ->limit(5)
    ->get();
    return view('shop', ['dt' => $dt, 'dt1'=>$dt1]);
    }

    public function tintuc(){
        $dt = DB::table('tintuc')->orderBy('id_tin', 'desc')->paginate(4);
        $dt1 = DB::table('tintuc')
        ->orderBy('view', 'desc')
        ->limit(4) // Giới hạn số lượng bài viết
        ->get();

        $dt2 = DB::table('danhmuc_tintuc')
       // Giới hạn số lượng bài viết
        ->get();// Thực hiện truy vấn sau khi gọi get()
        return view('tintuc', ['dt' => $dt,'dt1'=>$dt1, 'dt2'=>$dt2]);
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
        $chitiettin = TinTuc::find($id);
        $tinlienquan = TinTuc::where('id_danh_muc_tin',$id)->limit(3)->get();
        $danhmuctin = DanhMucTinTuc::all();
        $randsp = SanPham::inRandomOrder()->first();
        $randspchitiet = null;
        $sanpham = SanPham::where('hot',1)->limit(4)->get();
        if ($randsp) {
        $randspchitiet = ChiTietSanPham::where('id_san_pham', $randsp->id)->first();
        }
        return view('chitiettin',['chitiettin'=>$chitiettin,'tinlienquan'=>$tinlienquan,'danhmuctin'=>$danhmuctin,'randsp' => $randsp,'randspchitiet' => $randspchitiet,'sanpham'=>$sanpham]);
    }
    public function mtb(){
        $dt= DB::table('sanpham')->where('id_loai','3')->paginate(9);
        $dt1 = DB::table('sanpham')
    ->orderBy('hot')
    ->limit(5)
    ->get();
        return view('shop',['dt'=>$dt,'dt1'=>$dt1]);
    }
    public function qlsanpham(){
        $sanpham = DB::table('sanpham')->get();
        return view('admin/qlsanpham',compact('sanpham'));
    }
    public function create(){
        //lấy id của tất cả danh mục
        $danhmuc = DB::table('loai')->get();
        return view('admin/create-qlsanpham',compact('danhmuc'));
    }
    public function store(Request $request){
    $sanpham = array(
        'ten_san_pham' => $request->tensanpham,
        'id_loai' => $request->danhmuc,
        'mo_ta' => $request->content,
        'an_hien' => $request->anhien,
        'gia' => $request->giatien,
        'gia_khuyen_mai' => $request->giakhuyenmai,
    );

    if($request->hasFile('ImageUpload')){
        $file = $request->file('ImageUpload');
        $name = $file->getClientOriginalName();
        $image = time()."_".$name;
        $file->move(public_path().'/img/',$image);
        $sanpham['hinh'] = $image;
    }
        DB::table('sanpham')->insert($sanpham);
    return redirect()->route('admin-qlsanpham');
    }
    public function edit($id){
        $sanpham = DB::table('sanpham')->where('id_san_pham',$id)->first();
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

    DB::table('sanpham')->where('id_san_pham', $id)->update($sanphamData);

    return redirect()->route('admin-qlsanpham');
}
    public function destroy($id){
        $sanpham = DB::table('sanpham')->where('id_san_pham',$id)->first();
        $sanpham->delete();
        return redirect()->route('admin-qlsanpham');
    }
    public function qlchitietsanpham($id){
        $chitietsanpham = DB::table('chitietsanpham')->where('id_san_pham', $id)->get();
        $sanpham = DB::table('sanpham')->where('id_san_pham', $id)->first();
        return view('admin/qlchitietsanpham', compact('sanpham', 'chitietsanpham'));
    }
    public function createchitietsanpham($id){
        $sanpham = DB::table('sanpham')->where('id_san_pham', $id)->first();
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
        $chitietsanpham = DB::table('chitietsanpham')->where('id_chi_tiet', $id_chi_tiet)->first();
        $sanpham = DB::table('sanpham')->where('id_san_pham', $id_san_pham)->first();
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
        $tin = DB::table('sanpham')->where('id_san_pham', $id)->first();
        $tin1 = DB::table('chitietsanpham')->where('id_san_pham', $id)->get();
        $tin2 = DB::table('chitietsanpham')->where('id_san_pham', $id)->first();

        $idsp = $tin->id_san_pham;
        $product = BinhLuan::where('id_san_pham', $idsp)->get();
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

    // Thực hiện truy vấn tìm kiếm sản phẩm với giá trong khoảng từ $tu đến $den
    $dt = SanPham::whereBetween('gia', [$tu, $den])->get();

    return view('shop', compact('dt'));
}

}
