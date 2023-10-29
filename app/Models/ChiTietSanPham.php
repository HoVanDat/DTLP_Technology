<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietSanPham extends Model
{
    use HasFactory;
    protected $table = 'chitietsanpham';
    protected $primaryKey = 'id_chi_tiet';
    	protected $fillable = [
        'id_chi_tiet',
        'id_san_pham',
        'RAM',
        'CPU',
        'ROM',
        'mau_sac',
        'can_nang',
        'GPU',
        'man_hinh',
        'kich_thuoc',
        'xuat_xu',
        'thoi_diem_ra_mat',
        'he_dieu_hanh',
        'camera_truoc',
        'camera_sau',
        'dung_luong_pin',
        'sim',
        'tinh_nang',
        'bao_hanh',
        'cong_giao_tiep',
        'thuong_hieu',
        'do_dai_day',
        'loai_tai_nghe',
        'chat_lieu',
        'thoi_gian_sac_day',
        'thoi_gian_su_dung',
        'dai_tan_so',
        'gia',
        'so_luong',
        'hinh',
    ];
}
