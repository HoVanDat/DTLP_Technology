<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMucTinTuc extends Model
{
    use HasFactory;
    protected $table ="DanhMuc_TinTuc";
    protected $primaryKey = 'id_danh_muc_tin';
    public function tintuc(){
        return $this->hasMany('App\Models\TinTuc','id_danh_muc_tin','id_danh_muc_tin');
    }
}
