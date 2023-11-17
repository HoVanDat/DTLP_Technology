<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loai extends Model
{
    use HasFactory;

    protected $table = 'loai';
    protected $primaryKey = 'id_loai';
    protected $fillable = [
        'id_loai',
        'ten_loai',
        'thu_tu',
        'an_hien',
        'created_at',
        'updated_at',
    ];
      public function sanpham(){
        return $this->hasMany('App\Models\SanPham','id_loai','id_loai');
    }

}
