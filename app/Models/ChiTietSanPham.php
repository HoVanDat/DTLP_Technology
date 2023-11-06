<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietSanPham extends Model
{
    use HasFactory;

    protected $table ="ChiTietSanPham";
    protected $primaryKey = 'id_chi_tiet';

    public function sanpham(){
        return $this->belongsTo('App\Models\SanPham','id_san_pham','id_san_pham');
    }
   
    

 
}
