<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BinhLuan;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'content' => 'required',
        ]);

        if (session()->has('userInfo')) {
            $iduser = session('userInfo.iduser');
        } else {
            $iduser = 0;
        }

        BinhLuan::create([
            'name' => $request->name,
            'email' => $request->email,
            'sdt' => $request->sdt,

            'noi_dung' => $request->content,
            'thoi_diem' => now(), // Thêm dấu phẩy thay cho dấu chấm phẩy
            'id_san_pham' => $request->idsp, // Thêm dấu phẩy thay cho dấu chấm phẩy
            'id_nguoi_dung' => $iduser, // Thêm dấu phẩy thay cho dấu chấm phẩy
        ]);

        return back()->with('success', 'Bình luận của bạn đã được gửi.');
    }
}
