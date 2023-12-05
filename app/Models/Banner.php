<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $table='banner';
    protected $primaryKey='id_banner';
    protected $fillable=['ten','hinh','mo_ta','trang_thai'];
}
