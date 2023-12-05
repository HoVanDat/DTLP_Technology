<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    use HasFactory;
    protected $table = "binhluan";
    protected $primaryKey = 'id_binh_luan';

    protected $fillable = [
        'id_nguoi_dung',
        'id_tin',
        'id_san_pham',
        'noi_dung',
        'thoi_diem',
        'ten',
        'email',
        'sdt',
        'ten_san_pham',
        'rating'
    ];
}
