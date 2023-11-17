<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;

    protected $table ="SanPham";
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
    public function chitietsanpham(){
        return $this->hasMany('App\Models\ChiTietSanPham','id_san_pham','id_san_pham');
    }

    public function anhsp(){
        return $this->hasMany('App\Models\AnhSP','id_san_pham','id_san_pham');
    }
    
    public function loai(){
        return $this->belongsTo('App\Models\Loai','id_loai','id_loai');
    }
    
}
