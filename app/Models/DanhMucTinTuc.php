<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class DanhMucTinTuc extends Model
{

    use HasApiTokens, HasFactory, Notifiable;

   
    protected $table='danhmuc_tintuc';
    protected $primaryKey='id_danh_muc_tin';
     protected $fillable = [
        'ten_danh_muc'
     ];
     public function tintuc(){
        return $this->hasMany('App\Models\TinTuc','id_danh_muc_tin','id_danh_muc_tin');
    }

}
