<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class NguoiDung extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'nguoidung';
    protected $primaryKey = 'id_nguoi_dung';
    protected $fillable = [
        'id_nguoi_dung','ten','password','email','dia_chi','so_dien_thoai','vai_tro','hinh','trang_thai','ngay_sinh','noi_sinh','CCCD','ngay_cap','noi_cap','gioi_tinh','chuc_vu','bang_cap','tinh_trang_hon_nhan','token','created_at','update_at'];
    

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // The $hidden property specifies which attributes should be hidden when serialized to an array or JSON.

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // The $casts property allows you to specify data type casting for specific attributes.
}


