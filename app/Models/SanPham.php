<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_san_pham';
    public $timestamps = false;
    protected $table = "sanpham";
    protected $fillable = [
        'id_nguoi_dung',
        'gia',
        'thoi_diem_mua_hang',
        'ten_nguoi_nhan',
        'so_dien_thoai',
        'dia_chi',
        'trang_thai',
        'email',
        'pttt',
        'created_at',
        'ngay_dang',
    ];
}
