<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class TinTuc extends Model
{
  
    protected $table='tintuc';
    protected $primaryKey='id_tin';
     protected $fillable = [
         'tieu_de','noi_dung','id_danh_muc_tin','id_nguoi_dung','tom_tat','ten_nguoi_dang','hinh',
         'created_at','updated_at'
     ];
}
