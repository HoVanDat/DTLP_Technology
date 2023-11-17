<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnhSP extends Model
{
    use HasFactory;
    protected $table ="AnhSP";
    protected $primaryKey = 'id_anh_san_pham';
    public function sanpham(){
        return $this->belongsTo('App\Models\SanPham','id_san_pham','id_san_pham');
    }
}
