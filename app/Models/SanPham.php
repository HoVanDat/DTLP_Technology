<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    protected $table ="SanPham";
    protected $primaryKey = 'id_san_pham';
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
