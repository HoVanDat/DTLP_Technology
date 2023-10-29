<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class NguoiDung extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

   
   protected $table='nguoidung';
   protected $primaryKey='id_nguoi_dung';
    protected $fillable = [
        'ten','password','email','dia_chi','so_dien_thoai','vai_tro','hinh','trang_thai','ngay_sinh','noi_sinh','CCCD','ngay_cap','noi_cap','gioi_tinh','chuc_vu','bang_cap','tinh_trang_hon_nhan',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}