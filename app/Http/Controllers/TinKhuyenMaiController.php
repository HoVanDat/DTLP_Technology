<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TinTuc;
use App\Models\DanhMucTinTuc;
use App\Models\SanPham;
use Illuminate\Support\Facades\DB;



class TinKhuyenMaiController extends Controller
{
    function tinkhuyenmai(){
        $dt = DB::table('tintuc')
        ->where('id_danh_muc_tin', '2')
        ->paginate(4);
        $tintucs = [
            'dt' => DB::table('tintuc')->where('id_danh_muc_tin', '2')->paginate(4),
        ];
    // Giới hạn số lượng bài viết
        // Thực hiện truy vấn sau khi gọi get()
        return view('khuyenmai', ['tintucs'=>$tintucs]);
    }
}
