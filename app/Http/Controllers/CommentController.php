<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BinhLuan;

class CommentController extends Controller
{
    public function index(){
        $binhluan = BinhLuan::get();
        return view('admin.qlbinhluan', ['binhluan' => $binhluan]);
    }
    public function store(Request $request)
    {
        // Lấy dữ liệu từ request
        $rating = $request->input('rating');
        $ten = $request->input('ten');
        $id_san_pham = $request->input('id_san_pham');
        $comment = $request->input('comment');

        // Tạo một đối tượng BinhLuan mới
        $binhLuan = new BinhLuan();
        $binhLuan->rating = $rating;
        $binhLuan->ten = $ten;
        $binhLuan->id_san_pham = $id_san_pham;
        $binhLuan->noi_dung = $comment;

        // Lưu đối tượng vào cơ sở dữ liệu
        $binhLuan->save();

        // Điều hướng hoặc trả về phản hồi thành công
        return redirect()->back()->with('success', 'Bình luận của bạn đã được gửi thành công.');
    }

    public function editqlbinhluan(string $id){
        $binhluan= BinhLuan::where('id_binh_luan',$id)->first();
    return view('admin/edit-qlbinhluan',['binhluan'=>$binhluan]);
    }
    public function editqlbinhluanpost(Request $request){
    $id_binh_luan=$request['id_binh_luan'];
    // $ten_san_pham=$request['ten_san_pham'];
    // $ten=$request['ten'];
    $an_hien=$request['an_hien'];
    $noi_dung=$request['noi_dung'];
   BinhLuan::where('id_binh_luan',$id_binh_luan)->update([/*'ten_san_pham'=>$ten_san_pham,'ten'=>$ten,*/'an_hien'=>$an_hien,'noi_dung'=>$noi_dung]);
   session()->flash('success', 'Sửa thành công');
return redirect('admin/qlbinhluan');
    }
    public function deleteqlbinhluan(string $id){
        BinhLuan::where('id_binh_luan',$id)->delete();
        return redirect('admin/qlbinhluan');
    }
}