<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHangChiTiet extends Model
{
    use HasFactory;
    protected $table = "donhangchitiet";
    protected $primaryKey = 'id_don_hang_chi_tiet';
    protected $fillable = [
        'id_don_hang',
        'thoi_diem_mua_hang',
        'id_san_pham',
        'gia',
        'so_luong',
        'ten_san_pham',
    ];
}
