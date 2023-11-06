<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    use HasFactory;

    protected $table ="TinTuc";
    protected $primaryKey = 'id_tin';
    public function danhmuc_tintuc(){
        return $this->belongsTo('App\Models\DanhMuc_TinTuc','id_danh_muc_tin','id_danh_muc_tin');
    }
}
