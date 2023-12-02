<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class NguoiDung extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'nguoidung';
    protected $primaryKey = 'id_nguoi_dung';
    protected $fillable = [
       'ten','password','email','dia_chi','so_dien_thoai','vai_tro','hinh','trang_thai','ngay_sinh','noi_sinh','CCCD','ngay_cap','noi_cap','gioi_tinh','chuc_vu','bang_cap','tinh_trang_hon_nhan','token','created_at','update_at'];
    

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function tintuc(){
        return $this->hasMany('App\Models\TinTuc','id_nguoi_dung','id_nguoi_dung');
    }
}
