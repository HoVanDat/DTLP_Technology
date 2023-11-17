<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class TinTuc extends Model
{
    use HasFactory;

    protected $table ="TinTuc";
    protected $primaryKey = 'id_tin';
     protected $fillable = [
         'tieu_de','noi_dung','id_danh_muc_tin','id_nguoi_dung','tom_tat','ten_nguoi_dang','hinh',
         'created_at','updated_at'
     ];
    public function danhmuc_tintuc(){
        return $this->belongsTo('App\Models\DanhMuc_TinTuc','id_danh_muc_tin','id_danh_muc_tin');
    }

}
