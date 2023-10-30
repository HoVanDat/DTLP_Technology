<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;

    protected $table = 'sanpham';
    protected $primaryKey = 'id_san_pham';
    protected $fillable = [
        'id_san_pham',
        'ten_san_pham',
        'gia',
        'hinh',
        'mo_ta',
        'hot',
        'so_luot_xem',
        'an_hien',
        'id_loai',
        'gia_khuyen_mai',
        'created_at',
        'updated_at',

    ];
}
