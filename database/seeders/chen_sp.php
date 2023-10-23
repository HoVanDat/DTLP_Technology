<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class chen_sp extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<=100;$i++){
            $tensp= ['Samsung Galaxy','Xiaomi Redmi','Iphone','Oppo','Honor','Realme','Vivo','Asus','Nokia'];
            $gia=  mt_rand(2000000,30000000)/10;
        \DB::table('sanpham')->insert([
            'ten_san_pham'=> Arr::random($tensp).' '.Str::random(2),
            'gia' =>$gia,
            'gia_khuyen_mai'=> $gia *1.5 ,
            'hinh'=> 'dt'.mt_rand(1,50).'.webp',
            'id_loai'=>'1'
        ]);
    }
}
}